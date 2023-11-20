const WebSocket = require('ws');
const http = require('http');

// Utility function to add timestamp to console logs
function logWithTimestamp(message) {
  const timestamp = new Date().toISOString();
  console.log(`[${timestamp}] ${message}`);
}

function errorWithTimestamp(message) {
  const timestamp = new Date().toISOString();
  console.error(`[${timestamp}] ${message}`);
}

// Object to store the last received values for each symbol
const lastReceivedValues = {};

// Function to connect to the external WebSocket server
function connectToExternalServer() {
  const externalWs = new WebSocket('wss://fxstream.quum.us/data');

  externalWs.on('open', () => {
    logWithTimestamp('Connected to external WebSocket server');

    externalWs.on('message', (data) => {
      const stringData = data.toString('utf-8').trim();
      const lines = stringData.split('\n');  // Split by lines

      for (const line of lines) {
        const [symbol, value1, value2] = line.split(',');
        if (symbol === 'hello' || typeof value1 === 'undefined' || typeof value2 === 'undefined') continue;

        lastReceivedValues[symbol] = {value1, value2};

        const rareSymbols = ['AUSTX50', 'GER30', 'NDX100', 'SPX500', 'US30', 'FRA40', 'UK100', 'JPN225', 'EUSTX50'];
        if (rareSymbols.includes(symbol)) {
          logWithTimestamp(`Received data for rare symbol ${symbol}: ${value1}, ${value2}`);
        }
      }
    });
  });

  externalWs.on('close', () => {
    logWithTimestamp('Connection to external server closed. Reconnecting...');
    setTimeout(connectToExternalServer, 5000);
  });

  externalWs.on('error', (error) => {
    errorWithTimestamp(`External WebSocket Error: ${error}`);
  });
}

const server = http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('WebSocket proxy server running');
});

const wss = new WebSocket.Server({server});
const clients = new Set();

connectToExternalServer();

wss.on('connection', (ws) => {
  clients.add(ws);
  logWithTimestamp(`New client connected. Total connected clients: ${clients.size}`);

  ws.on('close', () => {
    clients.delete(ws);
    logWithTimestamp(`Client disconnected. Total connected clients: ${clients.size}`);
  });

  ws.on('error', (error) => {
    errorWithTimestamp(`WebSocket Error: ${error}`);
  });
});

// Stream the last received values for all symbols to all connected clients every 1 second
setInterval(() => {
  for (const [symbol, values] of Object.entries(lastReceivedValues)) {
    const csvDataToStream = `${symbol},${values.value1},${values.value2}`;

    for (const client of clients) {
      if (client.readyState === WebSocket.OPEN) {
        client.send(csvDataToStream);
      } else {
        logWithTimestamp('Client is not ready to receive data');  // Log if the client is not ready
      }
    }
  }
}, 1000);

server.listen(3000, () => {
  logWithTimestamp('Server started on http://localhost:3000/');
});

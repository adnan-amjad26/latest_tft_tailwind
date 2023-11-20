class SymbolsTable {
	_lastUpdateTimes = {};

	_iconDown = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>';
	_iconUp = '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>'

	constructor() {
		this.init();
	}

	init() {
		this.initializeWebSocket();
	}

	updateUI(symbol, bid, ask, spread, total) {
		const updateElement = (id, newValue) => {
			const currentTime = new Date().getTime();
			const lastUpdateTime = this._lastUpdateTimes[`${symbol}_${id}`] || 0;

			// If less than 1 second has passed since the last update, skip this update
			if (currentTime - lastUpdateTime < 1000) {
				return;
			}

			const element = document.getElementById(`${symbol}_${id}`);

			if (!element) {
				return;
			}

			const elementText = parseFloat(element.innerText);
			const lastValue = isNaN(elementText) ? 0 : elementText;

			let colorClass, caretHtml = '';
			if (newValue > lastValue) {
				colorClass = 'color_green';
				caretHtml = this._iconUp;
			} else if (newValue < lastValue) {
				colorClass = 'color_red';
				caretHtml = this._iconDown;
			} else {
				// No change in value, keep the current class and caret
			}

			element.innerText = newValue;
			element.className = colorClass;
			element.nextElementSibling.innerHTML = caretHtml;

			// Update the last update time for this cell
			this._lastUpdateTimes[`${symbol}_${id}`] = currentTime;
		};

		updateElement('BID', bid);
		updateElement('ASK', ask);
		updateElement('SPREAD', spread);
		updateElement('PRICE', total);
	}

	initializeWebSocket() {
		// const ws = new WebSocket(`wss://${hostname}/symboldata`);
		const ws = new WebSocket(`ws://localhost:3000/ws`);

		ws.onmessage = (event) => {
			let [symbol, bid, ask] = event.data.split(',');
			// Strip '_ecn' suffix from the symbol
			symbol = symbol.replace('_ecn', '');

			const cur_bid = parseFloat(bid).toFixed(5);
			const cur_ask = parseFloat(ask).toFixed(5);
			const cur_spread = (parseFloat(ask) - parseFloat(bid)).toFixed(5);
			const cur_total = (parseFloat(cur_spread) + 5).toFixed(5);

			this.updateUI(symbol, cur_bid, cur_ask, cur_spread, cur_total);
		};

		ws.onclose = () => {
			// Reconnect after 5 seconds
			setTimeout(this.initializeWebSocket, 5000);
		};

		ws.onerror = function (err) {
			console.error("WebSocket Error: ", err);
			// Close the WebSocket and trigger the 'onclose' event
			ws.close();
		};
	}
}

export const initSymbolsTable = () => {
	const table = document.querySelector('.trade-section-upper');

	if (!table) {
		return;
	}

	new SymbolsTable();
};

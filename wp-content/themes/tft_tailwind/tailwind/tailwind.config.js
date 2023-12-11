// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	darkMode: 'class',
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			keyframes: {
				flicker: {
					'from': {opacity: 0.5},
					'4%': {opacity: 0.5},
					'6%': {opacity: 0.45},
					'8%': {opacity: 0.55},
					'10%': {opacity: 0.45},
					'11%': {opacity: 0.5},
					'12%': {opacity: 0.65},
					'14%': {opacity: 0.55},
					'16%': {opacity: 0.7},
					'17%': {opacity: 0.55},
					'19%': {opacity: 0.5},
					'20%': {opacity: 0.5},
					'24%': {opacity: 0.5},
					'26%': {opacity: 0.69},
					'28%': {opacity: 0.5},
					'38%': {opacity: 0.45},
					'40%': {opacity: 0.5},
					'42%': {opacity: 0.6},
					'44%': {opacity: 0.5},
					'46%': {opacity: 0.5},
					'56%': {opacity: 0.5},
					'58%': {opacity: 0.75},
					'60%': {opacity: 0.5},
					'68%': {opacity: 0.5},
					'70%': {opacity: 0.6},
					'72%': {opacity: 0.5},
					'93%': {opacity: 0.5},
					'95%': {opacity: 0.6},
					'97%': {opacity: 0.5},
					'to': {opacity: 0.5},
				},
				bob: {
					'0%': {transform: 'translate3d(-50%, 0, 0)'},
					'50%': {transform: 'translate3d(-50%, -2rem, 0)'},
					'100%': {transform: 'translate3d(-50%, 0, 0)'},
				},
				spin: {
					'0%': {transform: 'translate3d(0,0,0) rotate(0)'},
					'100%': {transform: 'translate3d(0,0,0) rotate(360deg)'},
				}
			},
			animation: {
				bob: 'bob 8s infinite cubic-bezier(.45,0,.55,1)',
				spin: 'spin 120s linear infinite',
			},
			colors: {
				'navy': '#092236',
				'orange': '#F7971E',
				'yellow': '#EEC042',
				'night-blue': '#000032',
				'olive': '#818314',
			},
			backgroundImage: {
				'button-rapid': "url('img/btn-rapid.svg')",
				'button-standard': "url('img/btn-standard.svg')",
				'button-gold': "url('img/btn-gold.svg')",
			},
		},
		fontFamily: {
			'body': ['"Montserrat"', 'sans-serif'],
			'wadik': ['"Wadik"', '"Open Sans"'],
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography'),
	],
};

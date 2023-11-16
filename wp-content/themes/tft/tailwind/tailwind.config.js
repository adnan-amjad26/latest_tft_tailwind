// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
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
				}
			}
		},
		fontFamily: {
			'body': ['"Montserrat"', 'sans-serif'],
			'wadik': ['"Wadik"','"Open Sans"'],
		},
		screens: {
			'sm': {'min': '320px', 'max': '767px'},
			// => @media (min-width: 640px and max-width: 767px) { ... }
	  
			'md': {'min': '768px', 'max': '1023px'},
			// => @media (min-width: 768px and max-width: 1023px) { ... }
	  
			'lg': {'min': '1024px', 'max': '1279px'},
			// => @media (min-width: 1024px and max-width: 1279px) { ... }
	  
			'xl': {'min': '1280px', 'max': '1535px'},
			// => @media (min-width: 1280px and max-width: 1535px) { ... }
	  
			'2xl': {'min': '1536px'},
			// => @media (min-width: 1536px) { ... }
		}
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

// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const plugin = require('tailwindcss/plugin');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: '#ff5e14',
				secondary: '#f47514',
			},
			fontFamily: {
				body: ['Manrope', 'sans-serif'],
			},
			margin: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
			zIndex: {
				1: '1',
				2: '2',
				9: '9',
			},
			padding: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
			width: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
			height: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
			left: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
			right: {
				7.5: '30px',
				3.75: '15px',
				4.5: '18px',
				0.5: '2px',
				14.5: '60px',
				1.25: '5px',
				45: '180px',
				17.5: '70px',
				13.5: '50px',
			},
		},
		container: {
			center: true,
			padding: '1rem',
			screens: {
				sm: '576px',
				md: '767px',
				lg: '991px',
				xl: '1240px',
				'2xl': '1460px',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
		plugin(function ({ addUtilities }) {
			addUtilities(
				{
					'.btn': {
						padding: '12px 30px',
						display: 'inline-block',
						fontSize: '13px',
						borderRadius: '3px',
						fontWeight: 600,
						textAlign: 'center',
						color: 'white',
						verticalAlign: 'middle',
						whiteSpace: 'nowrap',
					},
				},
				['responsive', 'hover']
			);
		}),
	],
};

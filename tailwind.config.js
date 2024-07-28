/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      montserrat: ['Montserrat', 'sans-serif'],
    },
    extend: {
			colors: {
				'antiflash': '#f1f7f6', 
				'caribbean': '#00df81', 
				'mountain': '#2cc295', 
				'bangladesh': '#03624c', 
				'dgreen': '#032221', 
				'mint': '#2fa98c', 
				'frog': '#17876d', 
				'forest': '#095544', 
				'basil': '#0b453a', 
				'pine': '#06302b', 
				'pistachio': '#aacbc4', 
				'stone': '#7d7d7d', 
				'rblack': '#021A1A', 
				'danger': '#d42a34', 
				'warning': '#ffd827', 
				'primary': '#0677ba', 
			},
		},
  },
  plugins: [],
}


/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: '#8C4426',
        secondary: '#2E384C',
        accent: '#84531B',
        'accent-light': '#F8E8CE',
        'warm-bg': '#FDFBF7',
      },
      screens: {
        'lg': '992px',
      }
    },
  },
  plugins: [],
}

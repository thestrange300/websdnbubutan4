/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./src/**/*.{js,ts,jsx,tsx}"
  ],  theme: {
    extend: {
      maxHeight: {
        '128': '32rem',
      },
      spacing: {
        '100': '28rem',
      }      
    },
  },
  plugins: []
}

// fontFamily: {
//   sans: []
// }
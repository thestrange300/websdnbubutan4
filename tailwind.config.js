/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],  theme: {
    extend: {
      maxHeight: {
        '128': '32rem',
      }
    },
  },
  plugins: []
}

// fontFamily: {
//   sans: []
// }
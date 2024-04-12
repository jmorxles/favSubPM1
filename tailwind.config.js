/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily:{
            b: ["Shadows Into Light", ...defaultTheme.fontFamily.sans]
        }
      },
    },
    plugins: [],
  }

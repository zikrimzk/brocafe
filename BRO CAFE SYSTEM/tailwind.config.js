/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html', './login.php'],
  theme: {
    extend: {
      screens: {
        'ph': '400px'
        // => @media (max-width: 400px) { ... }
      },
    },
  },
  plugins: [],
}

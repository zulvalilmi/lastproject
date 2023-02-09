/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
  ],
  theme: {
    extend: {
      dropShadow: {
        "3xl": "0 20px 13px rgba(86, 5, 5, 0.35)",
      },
      fontFamily:{
        'sans' :['Rubik'],
      },
      colors: {
        'default' : '#C76C97',
      }
    },
  },
  plugins: [],
}

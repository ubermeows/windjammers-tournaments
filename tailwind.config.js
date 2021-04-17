module.exports = {
  purge: ['./resources/views/**/*.blade.php'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      display: ['"Arcade Normal"'],
    },
    extend: {
      minHeight: {
        '450px': '450px',
        '600px': '600px',
        '800px': '800px'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
  ],
}

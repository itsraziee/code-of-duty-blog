module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend:{
      colors: {
      'whiskey': '#D19B6C',
      'coffeeBean': '#301A0F',
      'cioccolato': '#61360C',
      'athensGray': '#F3F4F6',
     },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}

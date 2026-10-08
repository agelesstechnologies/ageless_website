const plugin = require('tailwindcss/plugin');
const variants = require('./resources/tailwind/variants.json');
const native = require('./resources/tailwind/native.json');

module.exports = {
  prefix: 'tw-',
  content: ['./resources/views/**/*.blade.php', './public/assets/js/**/*.js'],
  // Resets are expressed by the migrated Tailwind utility profiles.
  corePlugins: { preflight: false, container: false },
  theme: { extend: {
    colors: { brand: { navy: '#030d28', gold: '#f5a100' } },
    fontFamily: { sans: ['Poppins', 'sans-serif'] }
  } },
  plugins: [plugin(({ addVariant, addBase }) => {
    // Ordered selector variants retain component specificity, responsive
    // breakpoints, and runtime plugin states without legacy stylesheets.
    for (const [name, selectors] of variants) addVariant(name, selectors);
    // Fonts and keyframes are browser primitives, not component style rules.
    addBase(native);
  })]
};

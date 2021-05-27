const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Epilogue', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: colors.black,
                white: colors.white,
                gray: colors.blueGray,
                indigo: colors.indigo,
                blue: colors.blue,
                orange: colors.orange,
                fuchsia: colors.fuchsia,
              }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        
        translate: ['active', 'group-hover'],
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

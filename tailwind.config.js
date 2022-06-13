const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand': {
                    DEFAULT: '#EA1D2C',
                    '50': '#FAC5C9',
                    '100': '#F8B2B7',
                    '200': '#F48D95',
                    '300': '#F16872',
                    '400': '#ED424F',
                    '500': '#EA1D2C',
                    '600': '#BD121E',
                    '700': '#8A0D16',
                    '800': '#57080E',
                    '900': '#230306'
                  },
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Source Sans Pro', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                'header': ''
            },
            colors: {
                'brownbg': '#D9D9D9',
            },
            blur: {
                xs1: '1px',
                xs2: '2px',
                xs3: '3px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

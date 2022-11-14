const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
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
                bg_color: '#232F5D',
                primary: '#2581C4',
                secondary: '#76CCF4',
                first_gradient_color: '#2581C4',
                second_gradient_color: '#76CCF4',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

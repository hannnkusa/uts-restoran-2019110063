const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    important: true,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            ...colors,
        },
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            height: {
              "95-px": "95px",
              "70-px": "70px",
              "350-px": "350px",
              "500-px": "500px",
              "600-px": "600px",
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            block: ['group-hover'],
            backgroundColor: ['active'],
            textColor: ['active'],
            brightness: ['group-hover', 'hover', 'focus'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'green-page' : '#5EC992',
                'green-page-light' : '#E7FFF2',
                'main-page' : '#FD9B00'
            }
        },
        screens: {
            'xs': '400px',
            ...defaultTheme.screens,
        },
    },

    plugins: [forms],
};

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'main-color': 'rgba(61, 87, 168, 1)',
                'secondary-color': 'rgba(201, 13, 137, 1)',
                'main-text-color' : 'rgba(34, 34, 34, 1)'
            },
            borderRadius: {
                'btn-radius': '12px',
                'card-radius': '20px',
            },
            padding: {
                'btn-padding': '12px',
            }
        },
    },

    plugins: [forms],
};

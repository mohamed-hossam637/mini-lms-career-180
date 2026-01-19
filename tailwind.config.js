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
                'main-text-color': 'rgba(34, 34, 34, 1)',
                'secondary-text-color' : 'rgba(34, 34, 34, 0.6)',
                'section-bg' : 'rgba(243, 243, 243, 1)' ,
                'footer' : 'rgba(27, 45, 100, 1)'
            },
            borderRadius: {
                'btn-radius': '12px',
                'card': '20px',
            },
            padding: {
                'btn-padding': '12px',
                'container-padding' : '60px 80px' ,
                'card' : '8px 8px 16px 8px'
            },
            backgroundImage: {
                slider: "url('/assets/slider.png')",
            },
            fontSize : {
                'section-title' : '40px' ,
                'section-desc' : '20px'
            }
        },
    },

    plugins: [forms],
};

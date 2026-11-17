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
            colors: {
                brand: {
                    navy: '#0c2636',
                    'navy-dark': '#061722',
                    'navy-light': '#143c54',
                    teal: '#0f4c5c',
                    'teal-light': '#1b677a',
                    'teal-dark': '#0a323d',
                    gold: '#c7972d',
                    'gold-light': '#e3b34c',
                    'gold-dark': '#9b7119',
                    slate: '#f4f8fa',
                    muted: '#627c8a',
                },
            },
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['"Cinzel"', '"Cormorant Garamond"', '"Playfair Display"', 'Georgia', 'serif'],
                display: ['"Cinzel"', 'serif'],
            },
            boxShadow: {
                'brand': '0 10px 30px -10px rgba(12, 38, 54, 0.15)',
                'brand-lg': '0 20px 40px -15px rgba(12, 38, 54, 0.25)',
            },
        },
    },

    plugins: [forms],
};

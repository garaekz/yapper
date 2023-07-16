import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            width: {
                68: '17rem',
                88: '22rem',
            },
            colors: {
                darker: {
                    950: '#0c0c0c',
                    900: '#1a1a1a',
                    800: '#333333',
                    700: '#4d4d4d',
                    600: '#666666',
                    500: '#808080',
                    400: '#999999',
                    300: '#b3b3b3',
                    200: '#cccccc',
                    100: '#e6e6e6',
                    50: '#f2f2f2',
                },
            },
        },
    },

    plugins: [forms, typography],
};

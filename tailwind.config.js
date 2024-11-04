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
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                accent: {
                    50: '#e2f2ff',
                    100: '#b9ddff',
                    200: '#8bc9ff',
                    300: '#58b3ff',
                    400: '#2ca2ff',
                    500: '#0092ff',
                    600: '#0084f7',
                    700: '#0072e3',
                    800: '#0860d1',
                    900: '#0f40b2',
                }
            },
        },
    },

    plugins: [forms, typography],
};

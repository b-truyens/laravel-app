// import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors');
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php', 
    ],

    darkMode: 'class',
    


    theme: {
        extend: {

            colors: { 
                danger: colors.orange,
                primary: colors.purple,
                success: colors.blue,
                warning: colors.pink,
            }, 

            fontFamily: {
                sans: ['Maven Pro', ...defaultTheme.fontFamily.sans],
                
            },

        },
    },

    plugins: [forms, typography, colors],
};
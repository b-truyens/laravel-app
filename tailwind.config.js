import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors'; 
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

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
            fontFamily: {
                sans: ['Maven Pro', ...defaultTheme.fontFamily.sans],
                
            },
            colors: { 
                danger: colors.red,
                primary: colors.purple,
                success: colors.blue,
                warning: colors.pink,
            }, 
        },
    },

    plugins: [forms, typography],
};
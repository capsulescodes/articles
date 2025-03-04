import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwind from '@tailwindcss/vite';


export default defineConfig( {
    plugins : [
        laravel( {
            input : [ 'resources/css/app.css', 'resources/css/mail.css', 'resources/js/app.jsx' ],
            ssr : [ 'resources/js/mail.jsx' ],
            refresh : true,
        }),
        tailwind(),
        react(),
    ],
    resolve : { alias : { '~': '/resources/js' } }
} );

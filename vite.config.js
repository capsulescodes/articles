import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwind from '@tailwindcss/vite';


export default defineConfig( {
    build : { manifest : 'manifest.json', ssrEmitAssets : true },
    plugins : [
        laravel( {
            input : [ 'resources/css/app.css', 'resources/js/app.jsx' ],
            ssr : [ 'resources/css/mail.css', 'resources/js/mail.jsx' ],
            refresh : true,
        }),
        tailwind(),
        react(),
    ],
    resolve : { alias : { '~': '/resources/js' } }
} );

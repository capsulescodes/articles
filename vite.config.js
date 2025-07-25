import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwind from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';


export default defineConfig( {
    plugins : [
        laravel( {
            input : [ 'resources/css/app.css', 'resources/js/app.js' ],
            refresh : true,
        }),
        tailwind(),
        vue(),
    ],
    resolve : { alias : { '~': '/resources/js' } }
} );

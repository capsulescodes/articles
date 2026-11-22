import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';


export default defineConfig( {
    build : { manifest : 'manifest.json', ssrEmitAssets : true },
    plugins : [
        laravel( {
            input : [ 'resources/css/app.css', 'resources/js/app.js' ],
            ssr : [ 'resources/css/mail.css', 'resources/js/mail.js' ],
            refresh : true,
        }),
        vue(),
    ],
    resolve : { alias : { '~': '/resources/js' } }
});

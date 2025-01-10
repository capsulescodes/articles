import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig( {
    plugins : [
        laravel( {
            input : [ 'resources/css/app.css', 'resources/js/app.js' ],
            refresh : true,
        } ),
    ],
    clearScreen : false,
    server : {
        host : '0.0.0.0',
        port : 50004,
        strictPort : true,
        hmr : {
            protocol : 'ws',
            host : "192.168.0.8",
            port : 50005,
        },
    }
} );

import { createApp, h } from 'vue';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createInertiaApp } from '@inertiajs/vue3';

createInertiaApp( {
    resolve: name => resolvePageComponent( `./pages/${name}.vue`, import.meta.glob( './pages/**/*.vue', { eager : true } ) ),
    setup( { el, App, props, plugin } ) { createApp({ render: () => h( App, props ) }).use( plugin ).mount( el ) }
})

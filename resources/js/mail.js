import { createInertiaApp } from '@inertiajs/vue3';
import { createSSRApp, h } from 'vue';
import { renderToString } from '@vue/server-renderer';


createInertiaApp( {

    page : JSON.parse( process.argv[ 2 ] ),
    render : renderToString,
    resolve : name => import.meta.glob( './mails/**/*.vue', { eager : true } )[ `./mails/${name}.vue` ],
    setup( { App, props, plugin } ){ return createSSRApp( { render : () => h( App, props ) } ).use( plugin ); }

} ).then( data => process.stdout.write( JSON.stringify( data ) ) );

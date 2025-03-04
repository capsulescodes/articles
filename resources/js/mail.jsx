import { createInertiaApp } from '@inertiajs/react';
import { renderToString } from 'react-dom/server';


createInertiaApp( {

    page : JSON.parse( process.argv[ 2 ] ),
    render : renderToString,
    resolve : name => import.meta.glob( './mails/**/*.jsx', { eager : true } )[ `./mails/${name}.jsx` ],
    setup: ( { App, props } ) => <App { ...props } />

} ).then( data => process.stdout.write( JSON.stringify( data ) ) );

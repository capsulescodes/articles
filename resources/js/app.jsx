import { createInertiaApp } from '@inertiajs/react';
import { createRoot } from 'react-dom/client';


createInertiaApp( {

    resolve : name => import.meta.glob( './pages/**/*.jsx', { eager: true } )[ `./pages/${name}.jsx` ],
    setup( { el, App, props } ){ createRoot( el ).render( <App { ...props } /> ) }

} );

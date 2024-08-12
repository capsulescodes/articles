export function useStatusName( status )
{
    switch( status )
    {
        case 503 : return 'Service Unavailable';
        case 500 : return 'Server Error';
        case 419 : return 'Page Expired';
        case 418 : return 'I\'m a teapot';
        case 404 : return 'Not Found';
        case 403 : return 'Forbidden';
        default : return 'Error';
    }
}

export function useStatusMessage( status )
{
    switch( status )
    {
        case 503 : return 'Sorry, we are doing some maintenance. Please check back soon.';
        case 500 : return 'Whoops, something went wrong on our servers.';
        case 419 : return 'Sorry, your page expired.';
        case 418 : return 'Sorry, I am not a coffee machine.';
        case 404 : return 'Sorry, the page you are looking for could not be found.';
        case 403 : return 'Sorry, you are forbidden from accessing this page.';
        default : return 'Sorry, something went wrong unexpectedly.';
    }
}

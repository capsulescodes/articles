<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;


class SetLocale
{
    public function handle( Request $request, Closure $next ) : Response
    {
        if( in_array( $request->segment( 1 ), config( 'app.available_locales' ) ) && $request->segment( 1 ) !== App::currentLocale() ) Session::put( 'locale', $request->segment( 1 ) );

        App::setLocale( Session::get( 'locale', App::currentLocale() ) );

        URL::defaults( [ 'locale' => App::currentLocale() ] );

        return $next( $request );
    }
}

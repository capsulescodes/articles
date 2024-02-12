<?php

namespace App\Http\Middleware;

use Inertia\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;


class HandleInertiaRequests extends Middleware
{
    public function share( Request $request ) : array
    {
        $file = lang_path( App::currentLocale() . ".json" );

        return array_merge( parent::share( $request ), [
            'csrf' => csrf_token(),
            'locale' => App::currentLocale(),
            'locales' => config( 'app.available_locales' ),
            'translations' => File::exists( $file ) ? File::json( $file ) : []
        ] );
    }
}

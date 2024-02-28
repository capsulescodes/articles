<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix( '{locale}' )->where( [ 'locale' => '[a-zA-Z]{2}' ] )->group( function()
{
    Route::get( '', fn() => redirect()->route( Route::getRoutes()->match( Request::create( URL::previous() ) )->getName() ?? 'welcome' ) );

    Route::get( 'welcome', fn() => Inertia::render( 'Welcome' ) )->name( 'welcome' );

    Route::get( 'translate', fn( string $locale ) => dd( __( "This is a translation", [], $locale ) ) );
} );

Route::fallback( fn() => redirect()->route( 'welcome' ) );

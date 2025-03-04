<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Mail\WelcomeNewUser;


Route::get( '/', fn() => Inertia::render( 'Welcome' ) );

Route::get( '/render', fn() => ( new WelcomeNewUser() )->render() );

Route::get( '/send', function(){ Mail::to( 'yannick@capsules.codes' )->send( new WelcomeNewUser() ); } );

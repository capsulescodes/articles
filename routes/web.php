<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeNewUser;
use Illuminate\Support\Facades\Mail;


Route::get( '/', fn() => ( new WelcomeNewUser() )->render() );

Route::get( '/send', function(){ Mail::to( 'yannick@capsules.codes' )->send( new WelcomeNewUser( "Mailable World" ) ); } );

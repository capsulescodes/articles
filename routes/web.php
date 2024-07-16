<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackReceived;


Route::get( '/', fn() => Inertia::render( 'Welcome' ) );

Route::post( 'feedbacks', fn( FeedbackRequest $request ) => Notification::route( 'discord', config( 'logging.channels.discord.url' ) )->notify( new FeedbackReceived( $request ) ) );

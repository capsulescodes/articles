<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get( '/', [ PostController::class, 'index' ] )->name( 'posts.index' );
Route::get( '/{post:slug}', [ PostController::class, 'show' ] )->name( 'posts.show' );

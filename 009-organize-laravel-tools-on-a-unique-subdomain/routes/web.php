<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolsController;
use Inertia\Inertia;


Route::domain( config( 'tools.domain' ) )->group( function()
{
    Route::get( 'pulse', [ ToolsController::class, 'pulse' ] )->name( 'tools.pulse' );
    Route::get( 'telescope', [ ToolsController::class, 'telescope' ] )->name( 'tools.telescope' );

    Route::get( '{any}', fn() => redirect()->route( 'tools.pulse' ) )->where( 'any', '.*' );
});


Route::domain( config( 'app.domain' ) )->group( function()
{
    Route::get( '/', fn() => Inertia::render( 'App' ) )->name( 'app.welcome' );
});

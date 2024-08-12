<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get( '/{status?}', fn( int | null $status = null ) => App::abort( $status ?? 404 ) );

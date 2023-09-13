<?php

use Illuminate\Support\Facades\Route;


Route::get('/{mode?}', fn() => view( 'welcome' ) );

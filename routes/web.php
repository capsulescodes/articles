<?php

use Illuminate\Support\Facades\Route;
use App\Models\Foo;
use App\Models\Bar;


Route::get( '/', function()
{
    $foo = Foo::create();
    $bar = Bar::create();

    dd( $foo, $bar );
});

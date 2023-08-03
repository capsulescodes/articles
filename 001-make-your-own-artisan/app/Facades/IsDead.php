<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Contracts\Console\Kernel;


class IsDead extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return Kernel::class;
    }
}

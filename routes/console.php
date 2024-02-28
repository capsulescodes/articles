<?php

use Illuminate\Foundation\Inspiring;
use App\Facades\IsDead;


IsDead::command( 'inspire', function () {
    echo Inspiring::quotes()->random();
 })->purpose('Display an inspiring quote');

<?php

use Illuminate\Support\Facades\Schedule;


Schedule::command( 'backup:run' )->daily();
Schedule::command( 'backup:clean' )->daily();

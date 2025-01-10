<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

use function Laravel\Prompts\intro;
use function Laravel\Prompts\note;


class ServeWeb extends Command
{
    protected $signature = 'serve:web';


    public function handle()
    {
        intro( 'Running Web Environment' );

        $this->initViteServer();
        $this->initPHPServer();
    }


    private function initViteServer() : void
    {
        note( "Starting Vite Development Server" );

        Process::start( "npm run dev:vite:web" );
    }

    private function initPHPServer() : void
    {
        note( "Starting PHP Server" );

        Process::forever()->tty()->run( "php artisan serve --port=50000" );
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\File;

use function Laravel\Prompts\intro;
use function Laravel\Prompts\note;


class ServeDesktop extends Command
{
    protected $signature = 'serve:desktop';


    public function handle()
    {
        intro( 'Running Desktop Environment' );

        $this->initViteServer();
        $this->initPHPServer();
        $this->initTauriServer();
    }


    private function initTauriServer() : void
    {
        note( 'Starting Desktop App' );

        if( ! File::exists( base_path( 'src-tauri/target' ) ) )
        {
            Process::path( 'src-tauri' )->forever()->tty()->run( "cargo build" );
        }

        Process::forever()->tty()->run( "npm run dev:tauri:desktop -- --port=50003" );
    }

    private function initViteServer() : void
    {
        note( "Starting Vite Development Server" );

        Process::start( "npm run dev:vite:desktop" );
    }

    private function initPHPServer() : void
    {
        note( "Starting PHP Server" );

        Process::tty()->start( "php artisan serve --port=50000" );
    }
}

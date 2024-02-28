<?php

namespace CapsulesCodes\Package\Providers;

use Illuminate\Support\ServiceProvider;
use CapsulesCodes\Package\Console\Commands\GreetCommand;


class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands( [ GreetCommand::class ] );
    }
}

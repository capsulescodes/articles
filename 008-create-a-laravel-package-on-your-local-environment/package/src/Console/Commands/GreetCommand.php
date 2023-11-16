<?php

namespace CapsulesCodes\Package\Console\Commands;

use Illuminate\Console\Command;
use CapsulesCodes\Package\Greeter;


class GreetCommand extends Command
{
    protected $signature = "greet";

    protected $description = "Greet people with a 'Hello world!'";

    public function handle()
    {
        dump( Greeter::greet() );
    }
}

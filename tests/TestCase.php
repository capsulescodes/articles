<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Traits\Bootloadable;


abstract class TestCase extends BaseTestCase
{
    use Bootloadable;


    protected function initialize( $filename ) : void
    {
        if( $filename == "FirstTest" )
        {
            $this->artisan( 'migrate:fresh --seed' );
        }

        if( $filename == "SecondTest" )
        {
            $this->artisan( 'migrate:fresh --seed' );
        }
    }

    protected function finalize( $filename ) : void
    {
        if( $filename == "FirstTest" )
        {
            $this->artisan( 'migrate:reset' );
        }

        if( $filename == "SecondTest" )
        {
            $this->artisan( 'migrate:reset' );
        }
    }
}

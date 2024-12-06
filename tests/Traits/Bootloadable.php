<?php

namespace Tests\Traits;

use Illuminate\Support\Str;
use Pest\TestSuite;


trait Bootloadable
{
    private static int $count = 0;
    private static array $tests;
    private static string $current;


    protected function setUp() : void
    {
        parent::setUp();

        self::$current = array_reverse( explode( '\\', debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS, 2 )[ 1 ][ 'class' ] ) )[ 0 ];

        if( ! isset( self::$tests ) )
        {
            $this->init();
        }

        if( ! self::$count )
        {
            if( method_exists( self::class, 'initialize' ) ) $this->initialize( self::$current );
        }

        self::$count++;
    }

    protected function tearDown() : void
    {
        if(  self::$tests[ self::$current ] == self::$count )
        {
            if( method_exists( self::class, 'finalize' ) ) $this->finalize( self::$current );

            self::$count = 0;
        }

        parent::tearDown();
    }

    private function init() : void
    {
        $repository = TestSuite::getInstance()->tests;

        $data = [];

        foreach( $repository->getFilenames() as $file )
        {
            $factory = $repository->get( $file );

            $filename = Str::of( $file )->basename()->explode( '.' )->first();

            if( $factory->class === self::class ) $data = [ ...$data, ...[ $filename => count( $factory->methods ) ] ];
        }

        self::$tests = $data;
    }
}

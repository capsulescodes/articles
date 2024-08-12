<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;
use Inertia\Inertia;


return Application::configure( basePath : dirname( __DIR__ ) )
    ->withRouting( web : base_path( "/routes/web.php" ) )
    ->withMiddleware()
    ->withExceptions( fn( Exceptions $exceptions ) =>

        $exceptions->render( fn( HttpException $exception, Request $request ) =>

            Inertia::render( 'Error', [ 'status' => $exception->getStatusCode() ] )
                   ->toResponse( $request )
                   ->setStatusCode( $exception->getStatusCode() )
            )
    )
    ->create();

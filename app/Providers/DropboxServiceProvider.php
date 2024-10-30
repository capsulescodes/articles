<?php

namespace App\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;
use GuzzleHttp\Client;


class DropboxServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Storage::extend( 'dropbox', function( Application $app, array $config )
        {
            $resource = ( new Client() )->post( $config[ 'token_url' ] , [ 'form_params' => [ 'grant_type' => 'refresh_token', 'refresh_token' => $config[ 'refresh_token' ] ] ]);

            $accessToken = json_decode( $resource->getBody(), true )[ 'access_token' ];

            $adapter = new DropboxAdapter( new DropboxClient( $accessToken ) );

            return new FilesystemAdapter( new Filesystem( $adapter, $config ), $adapter, $config );
        });
    }
}

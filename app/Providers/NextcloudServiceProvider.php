<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Foundation\Application;
use Sabre\DAV\Client;
use League\Flysystem\WebDAV\WebDAVAdapter;
use Illuminate\Filesystem\FilesystemAdapter;
use League\Flysystem\Filesystem;


class NextcloudServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Storage::extend( 'nextcloud', function( Application $app, array $config )
        {
            $client = new Client( [ 'baseUri' => $config[ 'url' ], 'userName' => $config[ 'username' ], 'password' => $config[ 'password' ], 'authType' => $config[ 'auth' ] ] );

            $adapter = new WebDAVAdapter( $client, $config[ 'prefix' ] );

            return new FilesystemAdapter( new Filesystem( $adapter, $config ), $adapter, $config );
        } );
    }
}

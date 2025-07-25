<?php

use Illuminate\Support\Str;


return [

    'backup' => [

        'name' => env( 'NEXTCLOUD_APP_NAME', '' ),

        'source' => [

            'files' => [

				'include' => [ base_path( 'public' ), base_path( 'storage' ) ],

				'exclude' => [],

				'relative_path' => base_path(),
			],

            'databases' => [ 'sqlite' ]
        ],

        'destination' => [

            'filename_prefix' => Str::replace( '.', '-', env( 'NEXTCLOUD_APP_NAME' ) ) . '-',

            'disks' => [ 'nextcloud' ]
        ],

        'temporary_directory' => storage_path( 'app' )

    ]
];

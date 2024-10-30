<?php

return [

    'backup' => [

        'name' => '',

        'source' => [

            'files' => [

                'include' => [ base_path() ],

                'exclude' => [ base_path( 'vendor' ), base_path( 'node_modules' ) ],

                'relative_path' => null
            ],

            'databases' => [ 'sqlite' ]
        ],

        'database_dump_filename_base' => 'database',

        'database_dump_file_extension' => '',

        'destination' => [

            'compression_method' => ZipArchive::CM_DEFAULT,

            'compression_level' => 9,

            'filename_prefix' => Illuminate\Support\Str::replace( '.', '-', env( 'DROPBOX_APP_NAME' ) ) . '-',

            'disks' => [ 'dropbox' ]
        ],

        'temporary_directory' => '',

        'password' => null,

        'encryption' => 'default',

        'tries' => 1,

        'retry_delay' => 0,
    ]
];

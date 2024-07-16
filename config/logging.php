<?php

return [

    'channels' => [

		'discord' => [

		    'driver' => 'discord',
		    'url' => env( 'LOG_DISCORD_WEBHOOK_URL' ),
		    'mute' => env( 'LOG_DISCORD_MUTE', true )

		]

    ]

];

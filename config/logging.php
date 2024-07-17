<?php

return [

    'channels' => [

		'discord' => [

		    'driver' => 'discord',
		    'url' => env( 'LOG_DISCORD_WEBHOOK_URL' )

		]

    ]

];

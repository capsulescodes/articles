<?php

namespace App\Notifications\Discord;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;


class DiscordChannel
{
    public function send( object $notifiable, Notification $notification ) : void
    {
        $discordMessage = $notification->toDiscord();

        $discordWebhook = $notifiable->routeNotificationFor( 'discord' );

        Http::post( $discordWebhook, $discordMessage->toArray() );
    }
}

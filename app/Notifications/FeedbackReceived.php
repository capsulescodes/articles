<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use App\Http\Requests\FeedbackRequest;
use App\Notifications\Discord\DiscordChannel;
use App\Notifications\Discord\DiscordMessage;


class FeedbackReceived extends Notification
{
    private FeedbackRequest $request;


    public function __construct( FeedbackRequest $request )
    {
        $this->request = $request;
    }

    public function via() : string
    {
        return DiscordChannel::class;
    }

    public function toDiscord() : DiscordMessage
    {
        $email = $this->request->email ?? 'Anonymous';

        return ( new DiscordMessage() )->content( "New Capsules Codes Feedback : \"{$this->request->message}\" by {$email}" );
    }
}

<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Notifications\Messages\SlackMessage;


class FeedbackReceived extends Notification
{
    private FeedbackRequest $request;


    public function __construct( FeedbackRequest $request )
    {
        $this->request = $request;
    }

    public function via() : array
    {
        return [ 'slack' ];
    }

    public function toSlack() : SlackMessage
    {
        $email = $this->request->email ?? 'Anonymous';

        return ( new SlackMessage )->content( "New Capsules Codes Feedback : \"{$this->request->message}\" from {$email}" );
    }
}

<?php

namespace App\Notifications\Discord;

use Carbon\Carbon;


class DiscordMessage
{
    protected string $content = '';


    public function content( string $content ) : self
    {
        $this->content = $content;

        return $this;
    }

    public function toArray() : array
    {
        return [

            "embeds" => [

                [
                    "title" => $this->content,
                    "type" => "rich",
                    "timestamp" => Carbon::now(),
                    "color" => "14497651"
                ]

            ]

        ];
    }
}

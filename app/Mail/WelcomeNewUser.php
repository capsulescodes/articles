<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use CapsulesCodes\InertiaMailable\Mail\Mailable;
use CapsulesCodes\InertiaMailable\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class WelcomeNewUser extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function envelope() : Envelope
    {
        return new Envelope( subject : 'Welcome New User' );
    }

    public function content() : Content
    {
        return new Content( view : 'Welcome', props : [ 'name' => 'Capsules Codes' ] );
    }

    public function attachments() : array
    {
        return [];
    }
}

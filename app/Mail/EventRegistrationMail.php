<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $event;
    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($event, $user)
    {
        $this->event = $event;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Event Registration Confirmation')
            ->view('emails.event_registration')
            ->with([
                'event' => $this->event,
                'user' => $this->user,
            ]);
    }
}

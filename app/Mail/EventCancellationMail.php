<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventCancellationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $eventName;
    public $userName;

    /**
     * Create a new message instance.
     */
    public function __construct($eventName, $userName)
    {
        $this->eventName = $eventName;
        $this->userName = $userName;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Event Booking Canceled')
                    ->view('emails.event-cancellation');
    }
}


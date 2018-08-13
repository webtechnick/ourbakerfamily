<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RsvpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->replyTo($this->data['email'])
                    ->subject('RSVP from ' . $this->data['name'])
                    ->markdown('emails.rsvp')
                    ->with([
                        'name' => $this->data['name'],
                        'email' => $this->data['email'],
                        'count' => $this->data['count'],
                        'accept' => $this->data['accept'],
                        'message' => $this->data['message']
                    ]);
    }
}

<?php

namespace Tests\Feature;

use App\Mail\RsvpMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RsvpTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_send_an_rsvp_email()
    {
        Mail::fake();

        // $this->withoutExceptionHandling();

        $data = [
            'name' => 'Nick',
            'email' => 'email@example.com',
            'plusone' => 'on',
            'message' => 'Test message',
        ];

        $this->post('/rsvp', $data);

        Mail::assertSent(RsvpMail::class, function($mail) use ($data) {
            return $mail->data['name'] == $data['name'] &&
                   $mail->hasTo('rsvp@ourbaker.family');
        });
    }
}

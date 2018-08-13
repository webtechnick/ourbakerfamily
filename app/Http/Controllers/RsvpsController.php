<?php

namespace App\Http\Controllers;

use App\Http\Requests\RsvpRequest;
use App\Mail\RsvpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RsvpsController extends Controller
{
    public function store(RsvpRequest $request)
    {
        // Send email to admin.
        Mail::to('rsvp@ourbaker.family')
            ->send(new RsvpMail($request->all()));

        $this->goodFlash('Thank you for RSVPing!');

        return redirect()->route('home');
    }
}

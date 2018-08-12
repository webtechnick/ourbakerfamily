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
        // Store the RSVP ?

        // Send email to admin.
        Mail::to('rsvp@ourbaker.family')->send(new RsvpMail($request->all()));

        return redirect()->route('home');
    }
}

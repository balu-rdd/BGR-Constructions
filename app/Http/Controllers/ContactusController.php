<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function contactPost(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:50',
            'message' => 'required|max:255|string'
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $messages = $request->get('message');



        Mail::send('Email.email', compact('name', 'email','messages'), function ($message) {
            $message->to(config('sitevalues.CONTACT_EMAIL'))
                ->subject("New Contact Form Submission ");
        });

        return redirect()->route('home')->with('success', 'Thanks for contacting us, We will get in touch with you soon!');
    }
}

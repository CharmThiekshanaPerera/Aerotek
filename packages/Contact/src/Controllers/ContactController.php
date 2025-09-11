<?php

namespace Phyxle\Contact\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Phyxle\Contact\Mail\ContactMail;

class ContactController
{
    /**
     * Send contact mail.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request)
    {
        $inputs = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'max:255'],
            'message' => ['required', 'max:5000'],
        ]);

        Mail::send(new ContactMail($inputs));

        return redirect()->route('contact.index')->with([
            'success' => 'Thank you! Your message has been sent. We will contact you soon.',
        ]);
    }

    /**
     * Display contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact::contact.index');
    }
}

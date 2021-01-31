<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        // Send the email 
        request()->validate([
            'email' => 'required|email'
            ]);

        // $emailAddress = request('email');
        // dd($emailAddress);

        // Sending the actuall email
        // Mail::raw('Radi email', function($message){
        //     $message->to(request('email'))->subject('Pozdrav od automatskog zgembo maila');
        // });
        Mail::to(request('email'))->send(new \App\Mail\ContactMe('laravel'));

        return redirect('/contact')->with('message', 'Email sent');
    }
}

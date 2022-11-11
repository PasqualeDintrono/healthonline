<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'message' => 'required'
                ]);

        Mail::send('email', 
            
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'message' => $request->get('message') 
            ],
                
                function ($message) {
                        
                    $message->from('hello@example.com');
                    $message->to('hello@example.com', 'Your Name')->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
}

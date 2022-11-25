<?php
namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPost(Request $request)
    {
         // Data Validation
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'acceptance' => 'required'
        ]);

        // Invia una mail
        $message_details = [
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'company' => $request->post('company') ?? '--',
            'country' => $request->post('country') ?? '--',
            'message' => $request->post('message'),
        ];

        /* dd($message_details); */
         Mail::to('amministrazione@healthonline.com')->send(new ContactMail($message_details));
         Mail::to($message_details['email'])->send(new ThankYouMail($message_details));
         return back()->with('success', 'Thanks for contacting us. We will back to you soon!'); 
    }
}
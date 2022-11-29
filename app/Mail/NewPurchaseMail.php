<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewPurchaseMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_values)
    {   
        $this->email_values = $email_values;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'New Purchase Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.newPurchase',
            with: [
                'first' => $this->email_values['first'],
                'last' => $this->email_values['last'],
                'email' => $this->email_values['email'],
                'phone' => $this->email_values['phone'],
                'add1' => $this->email_values['add1'],
                'add2' => $this->email_values['add2'],
                'zip' => $this->email_values['zip'],
                'city' => $this->email_values['city'],
                'country' => $this->email_values['country'],
                'plan' => $this->email_values['plan'],
                'type' => $this->email_values['type'],    
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

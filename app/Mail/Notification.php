<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact; 
use App\Newsletter; 
use App\Quotation; 
use Illuminate\Http\Request;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->request->type === "contact")
            return $this->from('care@sellzmart.com')->subject("Notification: New Contact Request Received")->view('emails.contact');
        else if($this->request->type === "pricing")
            return $this->from('care@sellzmart.com')->subject("Notification: New Quotation Request Received")->view('emails.pricing');
        else if($this->request->type === "newsletter-sub")
            return $this->from('care@sellzmart.com')->subject("Notification: Subscription Added")->view('emails.newsletter');
    }
}
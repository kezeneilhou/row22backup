<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->to($this->details['email'])
                  ->subject('Nagaland RoW Portal Account Activation Status')
                  ->from('rowinfo@nagaland.gov.in')
                  ->view('emails.userRejectMail')
                  ->with(['name' => $this->details['name'] ])
                  ->with(['auth_person' => $this->details['auth_person'] ])
                  ->with(['auth_mobile' => $this->details['auth_mobile'] ])
                  ->with(['email' => $this->details['email'] ])
                  ;
    }
}

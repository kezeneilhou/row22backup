<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppStatusChangeMail extends Mailable
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
                  ->subject('Application Status Update - Nagaland RoW Portal')
                  ->from('rowinfo@nagaland.gov.in')
                  ->view('emails.appStatusChangeMail')
                  ->with(['name' => $this->details['name'] ])
                  ->with(['txn_id' => $this->details['txn_id'] ])
                  ->with(['status' => $this->details['status'] ])
                  ->with(['reason' => $this->details['reason'] ])
                  ;
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmissionMail extends Mailable
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
                    ->subject('Reg: Nagaland RoW Portal Application Submission')
                    ->from('rowinfo@nagaland.gov.in')
                    ->view('emails.appSubmissionMail')
                    ->with(['name' => $this->details['name'] ])
                    ->with(['txnid' => $this->details['txnid'] ])
                    ;
    }
}

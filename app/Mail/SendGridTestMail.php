<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendGridTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Hello from SendGrid via Laravel')
                    ->view('email.test');
    }
}
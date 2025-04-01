<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $studentName;
    public $url;

    public function __construct($studentName, $url)
    {
        $this->studentName = $studentName;
        $this->url = $url;
    }

    public function build()
    {
        return $this->subject('Welcome to Our Website!')
                    ->view('emails.welcome') // View for the email content
                    ->with([
                        'studentName' => $this->studentName,
                        'url' => $this->url,
                    ])
                    ->attach(public_path('images/pblogo.png'), [
                        'as' => 'logo.png',
                        'mime' => 'image/png',
                    ]);
    }
}

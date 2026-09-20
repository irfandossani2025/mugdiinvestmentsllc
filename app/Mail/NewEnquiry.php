<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEnquiry extends Mailable
{
    use Queueable,SerializesModels;

    public function __construct(public array $enquiry) {}

    public function build(): self
    {
        return $this->subject('New website enquiry: '.$this->enquiry['service'])->replyTo($this->enquiry['email'], $this->enquiry['name'])->view('emails.enquiry');
    }
}

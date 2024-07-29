<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public $email;

    public $messageContent;

    public function __construct($name, $email, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->to('higor12cs@gmail.com')
            ->subject('Nova mensagem de contato')
            ->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'messageContent' => $this->messageContent,
                'datetime' => now(),
            ]);
    }
}

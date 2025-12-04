<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Redefinição de Senha')
                    ->view('emails.reset-password')
                    ->with([
                        'resetUrl' => url("/resetar-senha?token={$this->token}&email={$this->user->email}"),
                        'user' => $this->user
                    ]);
    }
}

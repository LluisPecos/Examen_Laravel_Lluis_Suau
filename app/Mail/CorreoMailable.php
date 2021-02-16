<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoMailable extends Mailable
{
    use Queueable, SerializesModels;
    
    public $subject;
    public $contenido;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($titulo, $contenido)
    {
        $this->subject = $titulo;
        $this->contenido = $contenido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.enviado');
    }
}

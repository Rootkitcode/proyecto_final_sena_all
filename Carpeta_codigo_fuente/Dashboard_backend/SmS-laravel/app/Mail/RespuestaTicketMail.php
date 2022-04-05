<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RespuestaTicketMail extends Mailable
{
    use Queueable, SerializesModels;

    public $respuestaTicket;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($respuestaTicket)
    {
        $this->respuestaTicket = $respuestaTicket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('tickets.respuesta.vistaCorreoRespuesta');
    }
}

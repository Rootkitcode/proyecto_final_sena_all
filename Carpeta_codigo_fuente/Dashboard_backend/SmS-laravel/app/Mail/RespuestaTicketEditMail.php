<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RespuestaTicketEditMail extends Mailable
{
    use Queueable, SerializesModels;

    public $respuestaTicketEdit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($respuestaTicketEdit)
    {
        $this->respuestaTicketEdit = $respuestaTicketEdit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('tickets.respuesta.vistaCorreoRespuestaEdit');
    }
}

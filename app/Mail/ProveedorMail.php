<?php

namespace App\Mail;

use App\Models\Proveedor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProveedorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $proveedor = Proveedor::find($id);
        $message = "Buenas tardes " .$proveedor->nombre . "." .PHP_EOL.
        "\tMe comunico con usted para hacerle saber que requiero de un nuevo pedido.".PHP_EOL.
        "\tEspero su pronta respuesta." . PHP_EOL.
        "Gracias.";
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('MiBarrio@test.com', "Restaurante Mi Barrio")
        ->markdown('mail.prueba');
    }
}

<?php

namespace App\View\Components;

use App\Models\Platillo;
use Illuminate\View\Component;

class PlatilloCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $nombre;
    public $descripcion;
    public $precio;

    public function __construct($nombre, $descripcion, $precio)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.platillo-card');
    }
}

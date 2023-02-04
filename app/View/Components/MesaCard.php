<?php

namespace App\View\Components;

use App\Models\Mesa;
use Illuminate\View\Component;

class MesaCard extends Component
{
    public $id;
    public $cantPersonas;
    public $disponible;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $cantPersonas, $disponible)
    {
        $this->id = $id;
        $this->cantPersonas = $cantPersonas;
        $this->disponible = $disponible;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mesa-card');
    }
}

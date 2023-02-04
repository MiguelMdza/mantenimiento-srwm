<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Orden;
use App\Models\Platillo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $platillos = Platillo::all();
        return view('main.indexView')->with(['platillos' => $platillos]);
    }

    public function printTicket($id_mesa, $id_orden)
    {
        $mesa = Mesa::find($id_mesa);
        $orden = Orden::where('mesa_id', $id_mesa)->where('id', $id_orden)->get();
        return view('components.ticket')->with([ 'mesa' => $mesa, 'orden' => $orden]);
    }
}

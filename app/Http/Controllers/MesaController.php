<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Orden;
use App\Models\Platillo;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.indexView')->with(['mesas' => $mesas]);
    }

    public function findById(int $id)
    {
        $mesa = Mesa::find($id);
        if($mesa != null)
            return $mesa->toJson();
        else{
            return json_encode((object) null);
        }
    }

    public function create()
    {
        return view('mesas.editView');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cant_personas' => 'required|numeric|min:1'
        ]);

        $mesa = new Mesa();
        $mesa->cant_personas = $request->cant_personas;
        $mesa->save();
        return redirect()->route('mesaIndex');
    }

    public function edit(int $mesa_id)
    {
        $mesa = Mesa::find($mesa_id);
        return view('mesas.editView')->with(['mesa' => $mesa]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'cant_personas' => 'required|numeric|min:1'
        ]);
        $mesa = Mesa::find($request->id_mesa);
        $mesa->cant_personas = $request->cant_personas;
        $mesa->save();
        return redirect()->route('mesaIndex');
    }

    public function viewOrdenByMesa(int $mesa_id)
    {
        $platillos = Platillo::all();
        $mesa = Mesa::find($mesa_id);
        $orden = Orden::where('mesa_id', $mesa_id)->where('cerrada', false)->get();
        return view('orden.orderView')->with(['platillos' => $platillos, 'mesa' => $mesa, 'orden' => $orden]);
    }

    public function delete(Request $request)
    {
        $rows_affected = Mesa::destroy($request->id_mesa);
        return redirect()->route('mesaIndex');
    }
}

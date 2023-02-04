<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        $proveedores = Proveedor::all();
        return view('ingredientes.indexView')->with(['ingredientes' => $ingredientes,
                                                        'proveedores' => $proveedores]);
    }

    public function view(int $id)
    {
        $ingrediente = Ingrediente::find($id);
        if($ingrediente != null) {
            return $ingrediente->toJson();
        }
        else {
            return json_encode((object) null);
        }
    }

    public function create()
    {
        return view('ingredientes.editView');
    }

    public function store(Request $req)
    {
        $req->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric|min:1',
            'costo' => 'required|numeric|min:1'
        ]);
        $ingrediente = new Ingrediente();
        $ingrediente->nombre = $req->nombre;
        $ingrediente->cantidad = $req->cantidad;
        $ingrediente->costo = $req->costo;
        if($req->idProveedor != 'null'){
            $ingrediente->id_proveedor = $req->idProveedor;
        } else {
            $ingrediente->id_proveedor = 0;
        }
        $ingrediente->save();
        return redirect()->route('ingredienteIndex');
    }

    public function edit(int $id)
    {
        $ingrediente = Ingrediente::find($id);
        $proveedores = Proveedor::all();
        return view('ingredientes.editView')->with(['ingrediente' => $ingrediente,
            'proveedores' => $proveedores]);
    }

    public function update(Request $req)
    {
        $req->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric|min:0',
            'costo' => 'required|numeric|min:0'
        ]);
        $ingrediente = Ingrediente::find($req->id);
        $ingrediente->nombre = $req->nombre;
        $ingrediente->cantidad = $req->cantidad;
        $ingrediente->costo = $req->costo;
        if($req->idProveedor != 'null'){
            $ingrediente->id_proveedor = $req->idProveedor;
        } else {
            $ingrediente->id_proveedor = 0;
        }
        $ingrediente->save();
        return redirect()->route('ingredienteIndex');
    }

    public function delete(int $id)
    {
        Ingrediente::destroy($id);
        return redirect()->route('ingredienteIndex');
    }
}

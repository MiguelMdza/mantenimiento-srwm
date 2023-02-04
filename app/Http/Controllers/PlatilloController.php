<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Platillo;
use App\Models\Platillo_ingrediente;
use Illuminate\Http\Request;
use App\Models\TipoAlimento;
use Illuminate\Support\Facades\Storage;

class PlatilloController extends Controller
{
    public function index()
    {
        $alimentos = Platillo::all()->where('tipo_alimento_id', 1);
        $bebidas = Platillo::all()->where('tipo_alimento_id', 2);
        return view('platillos.indexView')->with([
            'alimentos' => $alimentos,
            'bebidas' => $bebidas]);
    }

    public function create()
    {
        $ingredientes = Ingrediente::all();
        $tipoAlimentos = TipoAlimento::all();
        return view('platillos.editView')->with(['ingredientes' => $ingredientes,
                                                'tipoAlimento' => $tipoAlimentos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'platillo_name' => 'required',
            'platillo_precio' => 'required|min:0'
        ]);
        $platillo = new Platillo();
        if(isset($request->id)){
            $platillo = Platillo::find($request->id);
        }
        $platillo->tipo_alimento_id = $request->tipo_alimento;
        $platillo->nombre = $request->platillo_name;
        $platillo->descripcion = $request->descripcion;
        $platillo->precio = $request->platillo_precio;
        if($platillo->ingredientes->count() >= 1){
            $platillo->ingredientes()->detach();
        }
        $platillo->save();
        //Ingredientes
        if(isset($request->ingrediente_id)){
            for ($i=0; $i < count($request->ingrediente_id); $i++) {
                //guardar id de ingrediente y platillo en tbla
                $platillo_ingrediente = new Platillo_ingrediente();
                $platillo_ingrediente->platillo_id = $platillo->id;
                $platillo_ingrediente->ingrediente_id = $request->ingrediente_id[$i];
                $platillo_ingrediente->cant_usa = $request->ingrediente_cant_usa[$i];
                $platillo_ingrediente->save();
            }
        }
        return redirect()->route('platilloIndex');
    }

    public function view(int $id)
    {
        $platillo = Platillo::find($id);
        return $platillo;
    }


    public function edit(int $id)
    {
        $ingredientes = Ingrediente::all();
        $tipoAlimentos = TipoAlimento::all();
        $platillo = Platillo::find($id);
        return view('platillos.editView')->with(['platillo' => $platillo,
                                                'ingredientes' => $ingredientes,
                                                'tipoAlimento' => $tipoAlimentos]);
    }

    public function delete(int $id)
    {
        $platillo = new Platillo();
        $platillo = Platillo::find($id);
        if($platillo->ingredientes->count() >= 1){
            $platillo->ingredientes()->detach();
        }
        $platillo->delete();
        return redirect()->route('platilloIndex');
    }
}

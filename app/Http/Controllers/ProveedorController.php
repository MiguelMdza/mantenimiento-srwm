<?php

namespace App\Http\Controllers;

use App\Mail\ProveedorMail;
use App\Models\Proveedor;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProveedorController extends Controller
{

    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index')->with(['proveedores' => $proveedores]);
    }

    public function create()
    {
        return view('proveedores.editView');
    }

    public function store(Request $request)
    {

        $request->validate(['nombre'=>'required']);
        $proveedor = new Proveedor();
        if(isset($request->id)){
            $proveedor = Proveedor::find($request->id);
        }
        $proveedor->nombre = $request->nombre;
        $proveedor->rfc = $request->rfc;
        $proveedor->direccion = $request->direccion;
        $proveedor->contacto = $request->contacto;
        $proveedor->save();

        return redirect()->route('proveedorIndex');
    }

    public function edit(int $id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedores.editView')->with(['proveedor' => $proveedor]);
    }

    public function delete(int $id)
    {
        Proveedor::destroy($id);
        return redirect()->route('proveedorIndex');
    }

    public function sendMail($id)
    {
        $proveedor = Proveedor::find($id);
        if(isset($proveedor->contacto)){
            Mail::to($proveedor->contacto)->send(new ProveedorMail($id));
            $correoMessage = "Correo enviado con exito";
        } else {
            $correoMessage = "No hay correo vinculado a este proveedor";
        }
        return redirect()->route('proveedorIndex')->with(['mensaje' => $correoMessage]);
    }
}

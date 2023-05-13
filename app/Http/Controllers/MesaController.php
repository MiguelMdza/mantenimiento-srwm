<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se obtiene la informacion y se le asigna a la variable
        $mesas = Mesa::all();
        //Carga la relación
        $mesas->load('usuario');
        return view('mesas/mesasIndex', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Obtenemos la información de los modelos para poderlos presentar en Create
        $users = User::all();
        return view('mesas/mesasCreate', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required', 
            'disponible',
            'cantidad_personas' => 'required|numeric|min:1|max:8',
        ]);

        $mesa = Mesa::create($request->all());
        $mesa->user_id = $request->user_id;
        //Guarda el campo usuario
        $mesa->save();
        return redirect('/mesa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
        $users = User::all();
        return view('mesas/mesasEdit', compact('users', 'mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
          //
          $request->validate([
            'user_id' => 'required', 
            'disponible',
            'cantidad_personas' => 'required|numeric|min:1|max:8',
        ]);

        //La información viene de empleadosEdit.blade.php y se guarda
        Mesa::where('id', $mesa->id)->update($request->except('_token', '_method'));

        return redirect('/mesa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        
        //La información viene de index y se elimina.
        $mesa->delete();
        
        return redirect('/mesa');
    }
}

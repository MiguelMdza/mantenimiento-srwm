<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = Comanda::all();
        return view('comandas/comandaIndex', compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesas = Mesa::all();

        return view('comandas/comandaCreate', compact('mesas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'total' => 'required',
            'comentarios',
        ]);

        Comanda::create($request->all());

        return redirect('/comanda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function show(Comanda $comanda)
    {
        $comandas = Comanda::all();
        return view('comandas/comandaShow', compact('comanda', 'comandas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Comanda $comanda)
    {
        return view('comandas/comandaEdit', compact('comanda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comanda $comanda)
    {
        $request->validate([
            'cerrada',
            'total' => 'required',
            'comentarios',
        ]);

        Comanda::where('id', $comanda->id)->update($request->except('_token', '_method'));

        return redirect('/comanda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comanda $comanda)
    {
        $comanda->delete();

        return redirect('comanda');
    }
}

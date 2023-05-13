<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Alimento;
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
        /* $comandas = Comanda::all();
        return view('comandas/comandaIndex', compact('comandas')); */

        //Solución al problema N+1 junto a comandas y se hace una pre-carga de la tabla mesas
        $comandas = Comanda::with('mesas', 'alimentos')->get();

        return view('comandas/comandaIndex', compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se asignan en 'mesas' todas las instancias del modelo Mesa y se mandan a la vista Create
        $mesas = Mesa::all();
        //Se asignan en 'alimentos' todas las instancias del modelo Alimento y se mandan a la vista Create
        $alimentos = Alimento::all();

        return view('comandas/comandaCreate', compact('mesas', 'alimentos'));
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
            'comentarios' => 'required|string|min:8|max:255',
        ]);

        /* Comanda::create($request->all()); */

        $comanda = Comanda::create($request->all());

        /*Entramos a la instancia "comanda" en su método "mesas"
            para tener acceso vincular la comanda con las mesas */
        $comanda->mesas()->attach($request->mesas_id);

        /*Entramos a la instancia "comanda" en su método "alimentos"
            para tener acceso vincular la comanda con los alimentos */
        $comanda->alimentos()->attach($request->alimentos_id);

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
        //Se asignan en 'mesas' todas las instancias del modelo Mesa y se mandan a la vista Edit
        $mesas = Mesa::all();

        //Se asignan en 'mesas' todas las instancias del modelo Alimento y se mandan a la vista Edit
        $alimentos = Alimento::all();

        return view('comandas/comandaEdit', compact('comanda', 'mesas', 'alimentos'));
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
            'total' => 'required',
            'comentarios' => 'required|string|min:8|max:255',
        ]);

        /* Comanda::where('id', $comanda->id)->update($request->except('_token', '_method')); */

        /*Actualiza la información de la tabla de la comanda, exceptuando las columnas 'token', 'method' y 'mesas_id
            Trabaja sobre la tabla Comanda' */
        Comanda::where('id', $comanda->id)->update($request->except('_token', '_method', 'mesas_id', 'alimentos_id'));

        /*UPDATE COMANDA-MESAS */

        /*Sincroniza la información que el usuario selecciona con respecto a lo que existe dentro de la base de datos
            Trabaja sobre la tabla Pivote */
        $comanda->mesas()->sync($request->mesas_id);

        /*UPDATE COMANDA-ALIMENTOS */

        /*Sincroniza la información que el usuario selecciona con respecto a lo que existe dentro de la base de datos
            Trabaja sobre la tabla Pivote */
        $comanda->alimentos()->sync($request->alimentos_id);

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
        /*Quitamos la relación que existe entre la tabla Comanda y el id de mesas
            Para que a nivel base de datos no nos arroje error de llave violada */
        $comanda->mesas()->detach();

        /*Quitamos la relación que existe entre la tabla Comanda y el id de alimentos
            Para que a nivel base de datos no nos arroje error de llave violada */
        $comanda->alimentos()->detach();
        
        $comanda->delete();

        return redirect('comanda');
    }
}

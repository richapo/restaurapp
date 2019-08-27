<?php

namespace restaurapp\Http\Controllers;

use restaurapp\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Mesa::all();
        return view('mesas/listaMesa',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesas/crearMesa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mesa::create([
            'capacidad_personas' => $request->capacidadPersonas
        ])->save();
        return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \restaurapp\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \restaurapp\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        return view('mesas/editarMesa',compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \restaurapp\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        $modi = Mesa::find($mesa->id);
        $modi->update($request->all());

        return redirect()->route('mesas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \restaurapp\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        Mesa::destroy($mesa->id);

        return redirect()->route('mesas.index');
    }
}

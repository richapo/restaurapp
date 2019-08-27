<?php

namespace restaurapp\Http\Controllers;

use restaurapp\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Insumo::all();
        return view('insumos/listaInsumo',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumos/crearInsumos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Insumo::create([
            'nombre' => $request->nombre,
            'stock' => $request->stock,
            'precio_compra' => $request->precioCompra,
        ])->save();
        return redirect()->route('insumo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \restaurapp\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(Insumo $insumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \restaurapp\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Insumo $insumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \restaurapp\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
        $modi = Insumo::find($insumo->id);
        $modi->update($request->all());

        return redirect()->route('insumo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \restaurapp\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insumo $insumo)
    {
        Insumo::destroy($insumo->id);

        return redirect()->route('insumo.index');
    }
}

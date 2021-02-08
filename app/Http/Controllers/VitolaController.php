<?php

namespace App\Http\Controllers;

use App\Models\Vitola;
use Illuminate\Http\Request;

class VitolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitola = Vitola::get();
        return response()->json($vitola);//ESTA EN JSONN PERO SE PUEDE MANDAR A LA VISTA
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validateData = $request-> validate([
            'vitola'=>'requerid',
            'id_planta'=>'requerid'
        ]);

        $vitola = new $vitola();
   
        $vitola->vitola=$request->input('vitola');
        $vitola->id_planta=$request->input('id_planta');
         $vitola->save();

         return;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitola  $vitola
     * @return \Illuminate\Http\Response
     */
    public function show(Vitola $vitola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitola  $vitola
     * @return \Illuminate\Http\Response
     */
    public function edit(Vitola $id)
    {
        $vitola = Vitola::findOrFail($id);

        return ;// AQUI RETORNA A LA VISTA O TABLA QUE SE DESEE MANDAR
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitola  $vitola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request-> validate([
            'vitola'=>'requerid',
            'id_planta'=>'requerid'
        ]);

        $vitola = Store::FindOrFail($id);
   
        $vitola->vitola=$request->input('vitola');
        $vitola->id_planta=$request->input('id_planta');
        $vitola->save();

         return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitola  $vitola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vitola $vitola)
    {
        //
    }
}

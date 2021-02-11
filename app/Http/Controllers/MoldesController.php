<?php

namespace App\Http\Controllers;

use App\Models\Moldes;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use PDF;

class MoldesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
        


        $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

        $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

        $id_planta = [$request->id];


        

        return view('sucursal_elparaiso')->with('moldes',$moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
        ->with('id_planta', $id_planta);
    

    }


    public function imprimirdatosparaiso( Request $request)
    {
        $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);    
        $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);
        $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);
        $id_planta = [$request->id];
  

      return view('imprimirtablaparaiso')->with('moldes',$moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
        ->with('id_planta', $id_planta);
    

        

    

    }




    public function index_vitola(Request $request)
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    
    }



      

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $molde = \DB::select('call insertar_moldes(:id_planta,:id_vitola,:id_figura,:bueno,:irregular,:malo,:reparacion,:bodega,:salon)',
      [ 'id_planta' => (int)$request->id_planta,
      'id_vitola' =>  \DB::select('call traer_id_vitola(?,?)', [$request->id_planta,$request->id_vitola])[0]->id_vitola,
      'id_figura' => \DB::select('call traer_id_figura(?,?)', [$request->id_planta,$request->id_figura])[0]->id_figura,
      'bueno' => (int)$request->bueno,
      'irregular' => (int)$request->irregulares,
      'malo' => (int)$request->malos,
      'reparacion' => (int)$request->reparacion,
      'bodega' => (int)$request->bodega
      ,'salon' => (int)$request->salon]);


      $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
              
      $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

      $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

      $id_planta = [$request->id];
        
      return redirect()-> route('datos_planta', ['id'=>1,'moldes'=> $moldes, 'vitolas'=> $vitolas, 'figuras'=>$figuras,
      'id_planta'=> $id_planta]);


     

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function show(Moldes $moldes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function edit(Moldes $moldes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moldes $moldes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moldes $moldes)
    {
        //
    }
}

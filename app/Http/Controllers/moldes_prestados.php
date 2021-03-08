<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class moldes_prestados extends Controller
{
    public function remisiones( Request $request)
    {

        $fechai = $request->fecha_inicio;
        $fechaf = $request->fecha_fin;
if($request->nombre === null){
    $nombrecero = "0";
}else{
    $nombrecero =$request->nombre;
}



    $titulo = "REMISIONES A OTRAS EMPRESAS";
    $moldes = \DB::select('call mostrar_remisiones_otras_empresas(:nombre)',
    [
        'nombre' => $nombrecero
    ]);  

   return view('otras_empresas')->with('titulo',$titulo) ->with('moldes',$moldes)  
   ->with('fechai',$fechai)->with('fechaf',$fechaf);
}


public function remisiones_index( Request $request)
    {

        $fechai = $request->fecha_inicio;
        $fechaf = $request->fecha_fin;
    $titulo = "REMISIONES A OTRAS EMPRESAS";
    $moldes = \DB::select('call mostrar_remisiones_otras_empresas_index');  

   return view('otras_empresas')->with('titulo',$titulo) ->with('moldes',$moldes)
   ->with('fechai',$fechai)->with('fechaf',$fechaf);


}



public function buscar_prestadas( Request $request)  {

    $titulo = "REMISIONES A OTRAS EMPRESAS";
   
    $fechai = $request->fecha_inicio;
    $fechaf = $request->fecha_fin;
    if ($request->fecha_inicio === null){
        $incio = "0";
   }else{
       $incio = $request->fecha_inicio;
   }

   if ($request->fecha_fin === null){
       $fin = "0";
   }else{
       $fin = $request->fecha_fin;
   }

   //$moldes = \DB::select('call mostrar_remisiones_otras_empresas_index');  

    $moldes = \DB::select('call buscar_remisiones_prestadas(:fecha_inicio,:fecha_fin)',
    [ 'fecha_inicio' => $incio,
    'fecha_fin' => $fin]);
  

    return view('otras_empresas')->with('titulo',$titulo)
    ->with('moldes', $moldes)  ->with('fechai',$fechai)->with('fechaf',$fechaf);
}




public function imprimirdatos_otras_empresas( Request $request){
                
    $fecha =Carbon::now();
    $fecha = $fecha->format('d-m-Y');

    $fechai = $request->fecha_inicio;
    $fechaf = $request->fecha_fin;
    $titulo = "REMISIONES A OTRAS EMPRESAS";
   
    if ($request->fechainicio === null){
        $incio = "0";
   }else{
       $incio = $request->fechainicio;
   }

   if ($request->fechafin === null){
       $fin = "0";
   }else{
       $fin = $request->fechafin;
   }

   //$moldes = \DB::select('call mostrar_remisiones_otras_empresas_index');  

    $moldes = \DB::select('call buscar_remisiones_prestadas(:fecha_inicio,:fecha_fin)',
    [ 'fecha_inicio' => $incio,
    'fecha_fin' => $fin]);
  

    $vista = view('imprimir_otras_empresas')->with('titulo',$titulo)
    ->with('moldes', $moldes)->with('fecha', $fecha)  ->with('fechai',$fechai)->with('fechaf',$fechaf);


    $pdf =  \PDF::loadHTML($vista);
    return $pdf->stream('nombre.pdf');

}
}

<?php

namespace App\Http\Controllers;

use App\Models\Moldes;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use PDF;
use Carbon\Carbon;


class MoldesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
       
        $titulo = "INVENTARIO DE MOLDES SUCURSAL EL PARAÍSO";
        
        $moldes = \DB::select('call moldes_paraiso(:vitola,:nombre_figura)',
        [ 'vitola' => (string)$request->vitolabuscar,
          'nombre_figura' => (string)$request->figurabuscar]);

        $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

        $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

        $id_planta = [$request->id];


        

        return view('sucursal_elparaiso')->with('moldes',$moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
        ->with('id_planta', $id_planta)->with('titulo',$titulo);
    

    }


    public function imprimirdatosparaiso( Request $request)
    {
        
        $fecha =Carbon::now();
        $fecha = $fecha->format('d-m-Y');

     

        
        $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);    
        $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);
        $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);
        $id_planta = [$request->id];
  
        $vista = view('imprimirtablaparaiso',['fecha' =>$fecha])->with('moldes',$moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
        ->with('id_planta', $id_planta);

        $pdf =  \PDF::loadHTML($vista);
        return $pdf->stream('nombre.pdf');



        // $pdf = PDF::loadView('imprimirtablaparaiso')->with('moldes',$moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)->with('id_planta', $id_planta);
        //  return $pdf->stream();
   
    

        

    

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
        $molde = \DB::select('call insertar_moldes(:id_planta,:id_vitola,:id_figura,:bueno,:irregular,:malo,:reparacion,:bodega,:salon,:fivi)',
                    [ 'id_planta' => (int)$request->id_planta,
                    'id_vitola' =>  \DB::select('call traer_id_vitola(?,?)', [$request->id_planta,$request->id_vitola])[0]->id_vitola,
                    'id_figura' => \DB::select('call traer_id_figura(?,?)', [$request->id_planta,$request->id_figura])[0]->id_figura,
                    'bueno' => (int)$request->bueno,
                    'irregular' => (int)$request->irregulares,
                    'malo' => (int)$request->malos,
                    'reparacion' => (int)$request->reparacion,
                    'bodega' => (int)$request->bodega,
                    'salon' => (int)$request->salon,
                    'fivi' => (string)$request->fivi
                    
                    ]);

                    toastr()->success( 'Tus datos se guardaron correctamente','BIEN' );

                    $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
                            
                    $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

                    $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);


                    return REDIRECT('sucursal_elparaiso/1')->with('moldes', $moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
                    ->with('id_planta', $request->id);

 

    }




     /* 
        $v_buenos = $request->bueno;
        $v_irregulares = $request->irregulares;
        $v_malos = $request->malos;
        $v_bodega = $request->bodega;
        $v_reparacion = $request->reparacion;
        $v_salon =$request->salon;
        $v_total =$request->total;
       
       if($v_buenos==""){ $v_buenos = "0";}
       if($v_irregulares==""){ $v_irregulares = "0";}
       if($v_malos==""){ $v_malos = "0";}
       if($v_bodega==""){ $v_bodega = "0";}
       if($v_reparacion==""){ $v_reparacion = "0";}
       if($v_salon==""){ $v_salon = "0";}
       */


     // validaciones para guardar
       /*
       if($v_total == "" || (int)($v_total) > 999999 ||  (int)($v_total) < 1   ){          

             toastr()->error('El total de ser mayor o igual a 1, o menor que 1000000' , 'ERROR');

        }else if( (int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&&            
                  (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon))){              

                 
                   



        }else if((int)($v_total) != ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                    toastr()->error( 'Tus datos de estado coinciden con el total','ERROR' );

        }else if((int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) != ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                 toastr()->error( 'Tus datos de ubicación coinciden con el total','ERROR' );

        }else {        
                  toastr()->error( 'Tus datos no coinciden con el total','ERROR' ,[
                    'timeOut' => 2000,
                    'positionClass' => "toast-top-full-width",
                    'progressBar' => TRUE,
                    'showDuration'=> 300,
                    ]); 

        }
            */
     







    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public static function edit($id)
    {
        
        $fila_moldes = \DB::select('call mostrar_datos_actualizar(?)',[$id]);

        return response()->json( $fila_moldes);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $molde = \DB::select('call actualizar_moldes(:id_molde, :bueno,:irregular,:malo,:reparacion,:bodega,:salon)',
                    [
                        'id_molde' => (int)$request->id_molde,
                        'bueno' => (int)$request->mo_bueno,
                        'irregular' => (int)$request->mo_irregular,
                        'malo' => (int)$request->mo_malo,
                        'reparacion' => (int)$request->mo_reparacion,
                        'bodega' => (int)$request->mo_bodega
                        ,'salon' => (int)$request->mo_salon
                     ]);

            
                      

                    $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
                            
                    $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

                    $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);


                    return REDIRECT('sucursal_elparaiso/1')->with('moldes', $moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
                    ->with('id_planta', $request->id);

 
        
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

    public function totales()
    {
       
        $titulo = "SUMATORIA TOTAL DE LOS MOLDES PLASENCIA";

        $distintos = \DB::select('call distintos_moldes()');

        foreach($distintos as $distinto){
            $insertar = \DB::select('call insertar_totales_plantas(?)' , [$distinto->figura_vitola]);
        }

        $totales_moldes = \DB::select('call mostrar_total_todas_plantas()');

        
        

        return view('sucursales_total')->with('totales',$totales_moldes)->with('titulo',$titulo);
    

    }



    
}

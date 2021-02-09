<?php

namespace App\Http\Controllers;

use App\Models\Moldes;
use Illuminate\Http\Request;

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

        return view('sucursal_elparaiso')->with('moldes', $moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
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
        
      //  $vitola = \DB::select('call traer_id_vitola(?,?)', [$request->id_planta,$request->id_vitola]);
        //$figura = \DB::select('call traer_id_figura(?,?)', [$request->id_planta,$request->id_figura]);

      
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


     // validaciones para guardar
       if($v_total == "" || (int)($v_total) > 999999 ||  (int)($v_total) < 1   ){          

             toastr()->error('El total de ser mayor o igual a 1, o menor que 1000000' , 'ERROR');

        }else if( (int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&&            
                  (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon))){              

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

                    toastr()->success( 'Tus datos se guardaron correctamente','BIEN' );

                    $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
                            
                    $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

                    $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

                    //$id_planta = [$request->id];

                    return view('sucursal_elparaiso')->with('moldes', $moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
                    ->with('id_planta', $request->id);
                   



        }else if((int)($v_total) != ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                    toastr()->error( 'Tus datos de estado coinciden con el total','ERROR' );

        }else if((int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) != ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                 toastr()->error( 'Tus datos de ubicación coinciden con el total','ERROR' );

        }else {        
                  toastr()->error( 'Tus datos no coinciden con el total','ERROR'); 

        }
         
        return null ;

    }



        /* $inser_moldes = new $inser_molde();
        $inser_moldes->id_planta=$request->input('id_planta');
        $inser_moldes->id_vitola=$request->input('id_vitola');
        $inser_moldes->id_figura=$request->input('id_figura');
        $inser_moldes->bueno=$request->input('bueno');
        $inser_moldes->irregulares=$request->input('irregulares');
        $inser_moldes->malos=$request->input('malos');
        $inser_moldes->reparacion=$request->input('reparacion');
        $inser_moldes->bodega=$request->input('bodega');
        $inser_moldes->salon=$request->input('salon');
         $inser_moldes->save();*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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


     // validaciones para guardar
       if($v_total == "" || (int)($v_total) > 999999 ||  (int)($v_total) < 1   ){          

             toastr()->error('El total de ser mayor o igual a 1, o menor que 1000000' , 'ERROR');

        }else if( (int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&&            
                  (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon))){              

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

                    toastr()->success( 'Tus datos se guardaron correctamente','BIEN' );

                    $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
                            
                    $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

                    $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

                    //$id_planta = [$request->id];

                    return view('sucursal_elparaiso')->with('moldes', $moldes)->with('vitolas', $vitolas)->with( 'figuras',$figuras)
                    ->with('id_planta', $request->id);
                   



        }else if((int)($v_total) != ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) === ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                    toastr()->error( 'Tus datos de estado coinciden con el total','ERROR' );

        }else if((int)($v_total) === ((int)($v_buenos)+(int)($v_irregulares)+(int)($v_malos))&& 
                 (int)($v_total) != ((int)($v_bodega)+(int)($v_reparacion)+(int)($v_salon)) ){

                 toastr()->error( 'Tus datos de ubicación coinciden con el total','ERROR' );

        }else {        
                  toastr()->error( 'Tus datos no coinciden con el total','ERROR'); 

        }
     

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

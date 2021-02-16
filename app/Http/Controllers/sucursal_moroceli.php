<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sucursal_moroceli extends Controller
{
    public function index( Request $request)
    {
       
        $titulo = "INVENTARIO DE MOLDES SUCURSAL EL PARAÍSO";
        $moldes = \DB::select('call mostrar_datos_moldes(?)', [$request->id]);
        


        $vitolas = \DB::select('call mostrar_vitolas(?)', [$request->id]);

        $figuras = \DB::select('call mostrar_figura_tipos(?)', [$request->id]);

        $id_planta = [$request->id];


        

        return view('sucursal_moroceli');
    

    }
}

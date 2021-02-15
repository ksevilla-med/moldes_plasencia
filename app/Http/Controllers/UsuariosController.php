<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {       
        
        $titulo = "USUARIOS Y ADMINISTRADORES";
        $sucursales = \DB::select('call mostrar_sucursal');       

        return view('usuarios')->with('sucursales',$sucursales)->with('titulo',$titulo);
    

    }
}

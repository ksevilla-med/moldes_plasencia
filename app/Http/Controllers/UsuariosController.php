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
        $usuarios = \DB::select('call mostrar_usuarios');       

        return view('usuarios')->with('sucursales',$sucursales)->with('titulo',$titulo)->with('usuarios',$usuarios);
    

    }



    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moldes  $moldes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        
        $molde = \DB::select('call actualizar_usuarios(:id_usuario, :codigo,:nombre_usuario,:id_planta,:correo)',
                    [
                        'id_usuario' => (int)$request->id_usuario,
                        'codigo' => (int)$request->txt_codigo,
                        'nombre_usuario' => (string)$request->txt_nombre_completo,
                        'id_planta' => (int)$request->txt_sucursales,
                        'correo' => (string)$request->txt_correo
                     ]);

            
                      

                     $titulo = "USUARIOS Y ADMINISTRADORES";
                     $sucursales = \DB::select('call mostrar_sucursal'); 
                     $usuarios = \DB::select('call mostrar_usuarios');       
             
                     return view('usuarios')->with('sucursales',$sucursales)->with('titulo',$titulo)->with('usuarios',$usuarios);

    }
}

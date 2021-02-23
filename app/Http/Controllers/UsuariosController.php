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




    public function register(Request $request)
    {
        'nombre' -> $request->txt_nombre_completo;
        'correo' ->  $request->txt_correo_electronico;
        'codigo' -> $request->txt_codigo;
        'sucursal' -> $request->txt_sucursales;
        'contrasenia' -> $request->confirmacion_contrasenia;

            $validator = Validator::make($request->all(), [                
            'codigo' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:users',
            'contrasenia' => 'required|string|min:6|confirmed',
            'sucursal' => 'required|string|max:255',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }



        $user = \DB::select('call insertar_usuarios(:nombre,:correo,:codigo,:sucursal,:contrasenia)',
        [ 
            'nombre' => $request->txt_nombre_completo,
            'correo' =>  $request->txt_correo_electronico,
            'codigo' => $request->txt_codigo,
            'sucursal' => $request->txt_sucursales,
            'contrasenia' => Hash::make($request->confirmacion_contrasenia)
        ]);

        // $user = User::create([
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'password' => Hash::make($request->get('password')),
        // ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }



    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        
        $usuario = \DB::select('call actualizar_usuarios(:id_usuario, :codigo,:nombre_usuario,:id_planta,:correo)',
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

    public function destroy(Request $request)
    {
        $usuario = \DB::select('call eliminar_usuario(:id_usuario)',
        [
            'id_usuario' => (int)$request->id_usuarioE
         ]);




        $titulo = "USUARIOS Y ADMINISTRADORES";
        $sucursales = \DB::select('call mostrar_sucursal'); 
        $usuarios = \DB::select('call mostrar_usuarios');   
        
        return REDIRECT('usuarios')->with('sucursales',$sucursales)->with('titulo',$titulo)->with('usuarios',$usuarios);
    

    }


}

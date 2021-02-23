<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {

        
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, 
            [

            'email' => 'required',
            'password' =>'required|max:5' 

            ]);

            if ($validator->fails()){ 

                try {
                    if (! $token = JWTAuth::attempt($credentials)) {
                        return response()->json([
                            'status' => false,
                            'message'=> "Invalid Credential"]);

                    }
                } catch (JWTException $e) {
                    return response()->json([
                        'status' => false,
                        'error' => $e ->getmessage(),
                        'message'=> "Invalid Credential"
                        
                        ]);   
                }

                return response()->json(compact('token'));

             } else{

            return response()->json([
            'errors' => $validator->messages(), 
            'status' => false ]);
                    }


       

        
    }

    public function register(Request $request)
    {
     
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



    public function getAuthenticatedUser()
        {
                try {

                        if (! $user = JWTAuth::parseToken()->authenticate()) {
                                return response()->json(['user_not_found'], 404);
                        }

                } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                        return response()->json(['token_expired'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                        return response()->json(['token_invalid'], $e->getStatusCode());

                } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                        return response()->json(['token_absent'], $e->getStatusCode());

                }

                return response()->json(compact('user'));
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    
public function authenticate( Request $request){
    $credentials = $request->only('email', 'password');

try {
    if(!$token =  JWTAuth::attempt($credentials)){
        return response()->json(['error'=> "Credencial no valida" ],401);
    }
    
} catch ( JWTException $e) {
    return response()->json(['error'=> "no se genero el token" ],500);
}

$response = compact('token');
$response['user'] = Auth::user()->getJWTIdentifier();

$users=Auth::user();

$users->token = compact('token');

Auth::login($users);

$usurtoken =  Auth::user();
$titulo="hola";

//return $usurtoken;
return view('principallogo')->with('Authoritation',$usurtoken->token)->with('titulo',$titulo);


}


}

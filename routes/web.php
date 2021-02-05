<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principallogo');
});

Route::get('/moldesprincipal', function () {
    return view('moldesprincipal');
});

Route::get('/sucursal_gualiqueme', function () {
    return view('sucursal_gualiqueme');
});

Route::get('/sucursal_elparaiso',[App\Http\Controllers\MoldesController::class, 'index'])->name('datos_planta');

Route::get('/sucursal_sanmarcos', function () {
    return view('sucursal_sanmarcos');
});

Route::get('/sucursal_moroceli', function () {
    return view('sucursal_moroceli');
});

Route::get('/sucursales_total', function () {
    return view('sucursales_total');
});

Route::get('/otras_empresas', function () {
    return view('otras_empresas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

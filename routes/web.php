<?php


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

Route::get('/entrada', function () {
    return view('login');
});

Route::get('/moldesprincipal', function () {
    return view('moldesprincipal');
});

Route::get('/sucursal_gualiqueme', function () {
    return view('sucursal_gualiqueme');
});

Route::get('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('datos_planta');
Route::post('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('id_planta');


Route::get('/crear_molde/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('datos');
Route::post('/sucursal_elparaiso/creado/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('insertar_moldes');

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

Route::get('/ayuda', function () {
    return view('ayuda');
});



Route::get('/imprimirtablaparaiso/1', function () {
  $pdf = PDF::loadView('imprimirtablaparaiso');
  return $pdf->stream();
});


Route::post('/imprimirtablaparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'imprimirdatosparaiso' ])->name('imprimirdatosparaiso');




  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

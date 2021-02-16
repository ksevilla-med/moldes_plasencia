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
    $titulo = "PLACENSIA INVENTARIO MÓVIL";
    return view('principallogo')->with('titulo',$titulo);
});

Route::get('/entrada', function () {
    return view('login');
});

Route::get('/moldesprincipal', function () {
    $titulo = "SUCURSALES PLASENCIA";
    return view('moldesprincipal')->with('titulo',$titulo);
});

Route::get('/sucursal_gualiqueme', function () {
    return view('sucursal_gualiqueme');
});

Route::get('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('datos_planta');
Route::post('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('id_planta');



//RUTA INSERTAR VITOLA
Route::get('/crear_molde/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('datos');
Route::post('/sucursal_elparaiso/creado/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('insertar_moldes');



// RUTA ACTUALIZAR MOLDES
Route::post('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'update' ])->name('actualizar_moldes');

// RUTA INSERTAR VITOLAS
Route::post('/agregar_vitola/{id}',[App\Http\Controllers\VitolaController::class, 'store' ])->name('insertar_vitola');


// RUTA INSERTAR FIGURAS
Route::post('/agregar_figura/{id}',[App\Http\Controllers\FiguraTipoController::class, 'store' ])->name('insertar_figura');


Route::get('/sucursal_sanmarcos', function () {
    return view('sucursal_sanmarcos');
});

Route::get('/usuarios',[App\Http\Controllers\UsuariosController::class, 'index' ]);

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





Route::get('/imprimir', function () {
  $pdf = PDF::loadView('imprimirtablaparaiso');
  return $pdf->stream();
})->name('imprimir');;


Route::post('/imprimirtablaparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'imprimirdatosparaiso' ])->name('imprimirdatosparaiso');




  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

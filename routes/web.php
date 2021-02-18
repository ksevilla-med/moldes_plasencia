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

Route::get('/entrada', function () {
    return view('login');
});
Route::get('/', function () {
    $titulo = "PLASENCIA INVENTARIO MÓVIL";
    return view('principallogo')->with('titulo',$titulo);
});
Route::get('/moldesprincipal', function () {
    $titulo = "SUCURSALES PLASENCIA";
    return view('moldesprincipal')->with('titulo',$titulo);
});


///////////////////      EL PARAISO    //////////////////////////

// MOLDE
Route::get('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('datos_planta');
Route::post('/sucursal_elparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'index' ])->name('id_planta');
Route::post('/sucursal_elparaiso/update/{id}',[App\Http\Controllers\MoldesController::class, 'update' ])->name('actualizar_moldes');
Route::post('/sucursal_elparaiso/crear/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('insertar_moldes');
// VITOLA
Route::post('/agregar_vitola/{id}',[App\Http\Controllers\VitolaController::class, 'store' ])->name('insertar_vitola');
Route::get('/crear_molde/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('datos');

//FIGURA
Route::post('/agregar_figura/{id}',[App\Http\Controllers\FiguraTipoController::class, 'store' ])->name('insertar_figura');

//PDF
Route::post('/imprimirtablaparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'imprimirdatosparaiso' ])->name('imprimirdatosparaiso');





///////////////////      SAN MARCOS    //////////////////////////







///////////////////      MOROCELI    //////////////////////////







///////////////////      GUALIQUEME    //////////////////////////




///////////////////      TOTAL PLANTAS    //////////////////////////
Route::get('/moldes_totales',[App\Http\Controllers\MoldesController::class, 'totales' ])->name('totales_moldes');
Route::post('/moldes_totales',[App\Http\Controllers\MoldesController::class, 'totales' ])->name('totales_moldes');

//USUARIO
Route::get('/usuarios',[App\Http\Controllers\UsuariosController::class, 'index' ]);
Route::post('/usuarios',[App\Http\Controllers\UsuariosController::class, 'update' ])->name('actualizar_usuario');
Route::post('/usuarios/a',[App\Http\Controllers\UsuariosController::class, 'destroy' ])->name('eliminar_usuario');

Route::get('/ayuda', function () {
    $titulo= "Ayuda";
    return view('ayuda')->with('titulo',$titulo);
});

Auth::routes();
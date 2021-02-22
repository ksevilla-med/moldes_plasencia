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
Route::post('/remisiones_paraiso/{id}',[App\Http\Controllers\MoldesController::class, 'remisiones' ])->name('remisiones');
Route::post('/remisiones_paraiso/crear/{id}',[App\Http\Controllers\MoldesController::class, 'insertarremisiones' ])->name('insertarremisiones');


// VITOLA
Route::post('/agregar_vitola/{id}',[App\Http\Controllers\VitolaController::class, 'store' ])->name('insertar_vitola');
Route::get('/crear_molde/{id}',[App\Http\Controllers\MoldesController::class, 'store' ])->name('datos');

//FIGURA
Route::post('/agregar_figura/{id}',[App\Http\Controllers\FiguraTipoController::class, 'store' ])->name('insertar_figura');

//PDF
Route::post('/imprimirtablaparaiso/{id}',[App\Http\Controllers\MoldesController::class, 'imprimirdatosparaiso' ])->name('imprimirdatosparaiso');


///////////////////      MOROCELI    //////////////////////////

Route::get('/sucursal_moroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'index' ])->name('datos_planta_moroceli');
Route::post('/sucursal_moroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'index' ])->name('id_planta_moroceli');
Route::post('/sucursal_moroceli/update/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'update' ])->name('actualizar_moldes_moroceli');
Route::post('/sucursal_moroceli/crear/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'store' ])->name('insertar_moldes_moroceli');
// VITOLA
Route::post('/agregar_vitolas/{id}',[App\Http\Controllers\VitolaController::class, 'store' ])->name('insertar_vitola_moroceli');
Route::get('/crear_molde/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'store' ])->name('datos_moroceli');

//FIGURA
Route::post('/agregar_figuras/{id}',[App\Http\Controllers\FiguraTipoController::class, 'store' ])->name('insertar_figura_moroceli');

//PDF
Route::post('/imprimirtablamoroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'imprimirdatosparaiso' ])->name('imprimirdatos_moroceli');





///////////////////      SAN MARCOS    //////////////////////////













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
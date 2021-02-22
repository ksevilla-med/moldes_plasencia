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

Route::post('/remisiones_paraiso/a',[App\Http\Controllers\MoldesController::class, 'actualizarremision' ])->name('actualizarremision');

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
Route::post('/agregar_vitola_moroceli/{id}',[App\Http\Controllers\Vitola_moroceli::class, 'store' ])->name('insertar_vitola_moroceli');
Route::get('/crear_molde/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'store' ])->name('datos_moroceli');

//FIGURA
Route::post('/agregar_figuras_moroceli/{id}',[App\Http\Controllers\figura_moroceli::class, 'store' ])->name('insertar_figura_moroceli');

//PDF
Route::post('/imprimirtablamoroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'imprimirdatosparaiso' ])->name('imprimirdatos_moroceli');


//REMISIONES

Route::get('/remisiones_moroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'remisiones' ])->name('remisiones_moroceli');
Route::post('/remisiones_moroceli/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'remisiones' ])->name('remisiones_moroceli');
Route::get('/remisiones_moroceli/crear/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'insertarremisiones' ])->name('insertarremisiones_moroceli');
Route::post('/remisiones_moroceli/crear/{id}',[App\Http\Controllers\sucursal_moroceli::class, 'insertarremisiones' ])->name('insertarremisiones_moroceli');




///////////////////      SAN MARCOS    //////////////////////////

Route::get('/sucursal_sanMarcos/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'index' ])->name('datos_planta_sanMarcos');
Route::post('/sucursal_sanMarcos/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'index' ])->name('id_planta_sanMarcos');
Route::post('/sucursal_sanMarcos/update/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'update' ])->name('actualizar_moldes_sanMarcos');
Route::post('/sucursal_sanMarcos/crear/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'store' ])->name('insertar_moldes_sanMarcos');
// VITOLA
Route::post('/agregar_vitola_sanMarcos/{id}',[App\Http\Controllers\Vitola_sanMarcos::class, 'store' ])->name('insertar_vitola_sanMarcos');
Route::get('/crear_molde/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'store' ])->name('datos_sanMarcos');

//FIGURA
Route::post('/agregar_figuras_sanMarcos/{id}',[App\Http\Controllers\figura_sanMarcos::class, 'store' ])->name('insertar_figura_sanMarcos');

//PDF
Route::post('/imprimirtablasanMarcos/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'imprimirdatosparaiso' ])->name('imprimirdatos_sanMarcos');

//REMISIONES

Route::get('/remisiones_sanMarcos/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'remisiones' ])->name('remisiones_sanMarcos');
Route::post('/remisiones_sanMarcos/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'remisiones' ])->name('remisiones_sanMarcos');
Route::get('/remisiones_sanMarcos/crear/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'insertarremisiones' ])->name('insertarremisiones_sanMarcos');
Route::post('/remisiones_sanMarcos/crear/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'insertarremisiones' ])->name('insertarremisiones_sanMarcos');


///////////////////      GUALIQUEME    //////////////////////////

Route::get('/sucursal_gualiqueme/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'index' ])->name('datos_planta_gualiqueme');
Route::post('/sucursal_gualiqueme/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'index' ])->name('id_planta_gualiqueme');
Route::post('/sucursal_gualiqueme/update/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'update' ])->name('actualizar_moldes_gualiqueme');
Route::post('/sucursal_gualiqueme/crear/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'store' ])->name('insertar_moldes_gualiqueme');
// VITOLA
Route::post('/agregar_vitola_gualiqueme/{id}',[App\Http\Controllers\Vitola_gualiqueme::class, 'store' ])->name('insertar_vitola_gualiqueme');
Route::get('/crear_molde/{id}',[App\Http\Controllers\sucursal_sanMarcos::class, 'store' ])->name('datos_sanMarcos');

//FIGURA
Route::post('/agregar_figuras_gualiqueme/{id}',[App\Http\Controllers\figura_gualiqueme::class, 'store' ])->name('insertar_figura_gualiqueme');

//PDF
Route::post('/imprimirtablagualiqueme/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'imprimirdatosparaiso' ])->name('imprimirdatos_gualiqueme');


//REMISIONES

Route::get('/remisiones_gualiqueme/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'remisiones' ])->name('remisiones_gualiqueme');
Route::post('/remisiones_gualiqueme/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'remisiones' ])->name('remisiones_gualiqueme');
Route::get('/remisiones_gualiqueme/crear/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'insertarremisiones' ])->name('insertarremisiones_gualiqueme');
Route::post('/remisiones_gualiqueme/crear/{id}',[App\Http\Controllers\sucursal_gualiqueme::class, 'insertarremisiones' ])->name('insertarremisiones_gualiqueme');






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
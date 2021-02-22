<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MostrarRemisionesRecibidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `moldes_gualiqueme`');
    
        DB::unprepared('

        CREATE PROCEDURE `mostrar_remisiones_recibidas`(
            IN `pa_nombre_fabrica` VARCHAR(50)
        )
      
        BEGIN
             SELECT  remisiones.fecha,remisiones.nombre_fabrica,remisiones.estado_moldes,remisiones.tipo_moldes,remisiones.cantidad
                                       FROM remisiones WHERE remisiones.nombre_fabrica = pa_nombre_fabrica;
        END
        '); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

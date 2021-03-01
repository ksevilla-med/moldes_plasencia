<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuscarRemisionRecibidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `buscar_remision_recibidas`');
    
        DB::unprepared('
        CREATE  PROCEDURE `buscar_remision_recibidas`(
            IN `pa_fecha_inicio` VARCHAR(50),
            IN `pa_fecha_fin` VARCHAR(50),
            IN `pa_nombre_planta` VARCHAR(50)
        )
     
        BEGIN
        
        if pa_fecha_inicio= "0" && pa_fecha_fin = "0" then 
        
        select *
           FROM remisiones, plantas 
             WHERE remisiones.nombre_fabrica = pa_nombre_planta AND plantas.id_planta = remisiones.id_planta;
         
         
        else
        
        select *
          from remisiones, plantas
         where remisiones.fecha between pa_fecha_inicio AND pa_fecha_fin AND 
                  remisiones.nombre_fabrica = pa_nombre_planta AND plantas.id_planta = remisiones.id_planta;
                 
        END if ;
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarRemisiones extends Migration
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

        CREATE PROCEDURE `insertar_remisiones`(
            IN `pa_fecha` DATE,
            IN `pa_id_planta` INT,
            IN `pa_nombre_fabrica` VARCHAR(50),
            IN `pa_estado_moldes` VARCHAR(50),
            IN `pa_tipo_moldes` VARCHAR(50),
            IN `pa_cantidad` INT,
            IN `pa_chequear` INT
        )
       
        BEGIN
         
          INSERT INTO remisiones(remisiones.fecha,remisiones.id_planta, remisiones.nombre_fabrica,
          remisiones.estado_moldes,remisiones.tipo_moldes,remisiones.cantidad,remisiones.chequear)
                  VALUES(pa_fecha,pa_id_planta, pa_nombre_fabrica,
                              pa_estado_moldes,pa_tipo_moldes,pa_cantidad,pa_chequear);
                    
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarEntradaPilones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `insertar_entrada_pilon`');
    
        DB::unprepared('
       
        CREATE PROCEDURE `insertar_entrada_pilon`(
            IN `pa_id_tabaco_entrada` VARCHAR(50),
            IN `pa_id_pilon_entrada` VARCHAR(50),
            IN `pa_fecha_entrada_pilon` DATE,
            IN `pa_tiempo_adelanto_entrada` VARCHAR(50),
            IN `pa_fecha_estimada_salida` DATE,
            IN `pa_cantidad_lbs_entrada` VARCHAR(50)
        )
        BEGIN
        
           INSERT INTO entrada_pilones(id_tabaco,id_pilon,fecha_entrada_pilon,tiempo_adelanto_pilon,fecha_estimada_salida,cantidad_lbs)
             VALUES (pa_id_tabaco_entrada,pa_id_pilon_entrada,pa_fecha_entrada_pilon,pa_tiempo_adelanto_entrada,pa_fecha_estimada_salida,pa_cantidad_lbs_entrada);
           SELECT "Guardado correctamente" ,1;
           
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

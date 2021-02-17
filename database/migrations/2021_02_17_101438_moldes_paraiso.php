<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoldesParaiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `mostrar_moldes_actualizar`');
    
        DB::unprepared('

        CREATE PROCEDURE `moldes_paraiso`(
            IN `pa_vitola` VARCHAR(50),
            IN `pa_figura` VARCHAR(50)
        )
       
        BEGIN
        
        SELECT  plantas.nombre_planta, vitolas.vitola, figura_tipos.nombre_figura, moldes.bueno,  moldes.irregulares, moldes.malos, 
        moldes.bodega, moldes.reparacion, moldes.salon,moldes.total, moldes.id_molde
        FROM plantas, moldes, figura_tipos, vitolas WHERE  plantas.id_planta = "1" AND
        moldes.id_planta = plantas.id_planta AND vitolas.id_planta = plantas.id_planta and figura_tipos.id_planta = plantas.id_planta AND moldes.id_figura = figura_tipos.id_figura AND
        moldes.id_vitola = vitolas.id_vitola AND vitolas.vitola LIKE CONCAT('%', pa_vitola, '%') AND figura_tipos.nombre_figura LIKE CONCAT('%', pa_figura, '%')      ;
        
          
          
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

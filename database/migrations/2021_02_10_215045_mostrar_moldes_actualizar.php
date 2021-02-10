<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MostrarMoldesActualizar extends Migration
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

        CREATE PROCEDURE `mostrar_moldes_actualizar`(
            IN `pa_id_molde` INT
        )
       
        BEGIN
        
        SELECT moldes.id_molde,plantas.nombre_planta, vitolas.vitola , figura_tipos.nombre_figura , moldes.bueno, moldes.irregulares, moldes.malos, moldes.reparacion, moldes.bodega
          , moldes.salon , moldes.total FROM  moldes, vitolas , figura_tipos, plantas where moldes.id_molde = pa_id_molde AND moldes.id_vitola = vitolas.id_vitola AND 
          figura_tipos.id_figura = moldes.id_figura AND plantas.id_planta = moldes.id_planta;
          
          
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizarMoldes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `actualizar_moldes`');
    
        DB::unprepared('

        CREATE  PROCEDURE `actualizar_moldes`(
            IN `pa_id_molde` INT,
            IN `pa_bueno` INT,
            IN `pa_irregular` INT,
            IN `pa_malo` INT,
            IN `pa_bodega` INT,
            IN `pa_reparacion` INT,
            IN `pa_salon` INT
        )
        
        
        UPDATE moldes SET moldes.bueno = pa_bueno, moldes.irregulares = pa_irregular, moldes.malos =  pa_malo , 
        moldes.reparacion=pa_reparacion, moldes.bodega= pa_bodega, moldes.salon =    pa_salon  WHERE moldes.id_molde = pa_id_molde;
        
        
        
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

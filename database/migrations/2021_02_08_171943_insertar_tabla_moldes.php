<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarTablaMoldes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE PROCEDURE `insertar_moldes`(
            IN `pa_id_planta` INT,
            IN `pa_id_vitola` INT,
            IN `pa_id_figura` INT,
            IN `pa_bueno` INT,
            IN `pa_irregular` INT,
            IN `pa_malo` INT,
            IN `pa_bodega` INT,
            IN `` INT,
            IN `pa_reparacion` INT,
            IN `pa_salon` INT
        )

        
                DECLARE suma_estado INT;
                DECLARE suma_ubicacion INT; 
                
                
                SET suma_estado = pa_bueno+ pa_irregular+ pa_malo;
                SET suma_ubicacion = pa_bodega + pa_reparacion + pa_salon;
                if  suma_estado = suma_ubicacion then
                
                INSERT INTO moldes(moldes.id_planta, moldes.id_vitola, moldes.id_figura,
                 moldes.bueno, moldes.irregulares,moldes.malos, moldes.bodega,moldes.reparacion,moldes.salon, moldes.total)
                 VALUES(pa_id_planta, pa_id_vitola,pa_id_figura, pa_bueno, pa_irregular, pa_malo, pa_bodega, pa_reparacion, pa_salon, suma_estado);
               
                
                ELSE 
                
                          SELECT "no se puede";
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

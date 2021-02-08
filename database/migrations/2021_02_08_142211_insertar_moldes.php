<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarMoldes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      //DB::unprepared("delimiter //" );

      DB::unprepared('
      CREATE PROCEDURE mostrar_datos_moldes(IN `pa_id_planta` INT)
        BEGIN
                    SELECT  plantas.nombre_planta, vitolas.vitola, figura_tipos.nombre_figura, moldes.bueno,  moldes.irregulares, moldes.malos, 
                    moldes.bodega, moldes.reparacion, moldes.salon
                    FROM plantas, moldes, figura_tipos, vitolas WHERE pa_id_planta = plantas.id_planta AND
                    moldes.id_planta = plantas.id_planta AND vitolas.id_planta = plantas.id_planta and figura_tipos.id_planta = plantas.id_planta 
                    AND moldes.id_figura = figura_tipos.id_figura AND
                    moldes.id_vitola = vitolas.id_vitola; 
        END
        
        '); 

      //  \DB::unprepared("delimiter ;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
       // DB::unprepared('drop Procedure `mostrar_datos_moldes`');
        
    }
}

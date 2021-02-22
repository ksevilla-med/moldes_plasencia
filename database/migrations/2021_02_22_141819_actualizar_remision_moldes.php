<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizarRemisionMoldes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::unprepared('DROP procedure if exists `actualizar_remision_moldes`');
    
        DB::unprepared('
        CREATE  PROCEDURE `actualizar_remision_moldes`(
            IN `pa_id_remision` INT,
            IN `pa_id_planta` INT,
            IN `pa_estado` VARCHAR(50),
            IN `pa_fivi` VARCHAR(50),
            IN `pa_cantidad` INT,
            IN `pa_id_molde` INT,
            IN `pa_id_planta_recibido` INT
        )
       
        BEGIN
         
         
         DECLARE otra_planta INT;
         SET otra_planta = (SELECT  moldes.id_molde  FROM moldes, vitolas, figura_tipos WHERE moldes.id_planta = pa_id_planta_recibido AND moldes.id_vitola = vitolas.id_vitola
        AND moldes.id_figura = figura_tipos.id_figura AND CONCAT(figura_tipos.nombre_figura,"  ",vitolas.vitola)= pa_fivi );
        
        
        if pa_estado = "buenos" then
        
        UPDATE moldes SET moldes.bueno = moldes.bueno - pa_cantidad  , moldes.total = moldes.total - pa_cantidad ,
        moldes.bodega = moldes.bodega - pa_cantidad WHERE  moldes.id_molde = pa_id_molde;
        
        UPDATE moldes SET moldes.bueno = moldes.bueno + pa_cantidad  , moldes.total = moldes.total + pa_cantidad ,
        moldes.bodega = moldes.bodega + pa_cantidad WHERE  moldes.id_molde = otra_planta;
        
        
        ELSE if   pa_estado = "irregulares" then 
        
        UPDATE moldes SET moldes.irregulares = moldes.irregulares - pa_cantidad  , moldes.total = moldes.total - pa_cantidad ,
        moldes.bodega = moldes.bodega - pa_cantidad WHERE  moldes.id_molde = pa_id_molde;
        
        
        UPDATE moldes SET moldes.irregulares = moldes.irregulares + pa_cantidad  , moldes.total = moldes.total + pa_cantidad ,
        moldes.bodega = moldes.bodega + pa_cantidad WHERE  moldes.id_molde = otra_planta;
        ELSE
        
        
        SELECT "no se puede"; 
        
        
        END if; 
        
        END if;
        
        
        
        UPDATE remisiones SET remisiones.chequear = 1 WHERE remisiones.id_remision = pa_id_remision;
        
        
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

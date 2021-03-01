<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertarPilones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `insertar_pilones`');
    
        DB::unprepared('
       
        CREATE PROCEDURE `insertar_pilones`(
            IN `pa_numero_pilon` INT
        )
        BEGIN
          if EXISTS (SELECT * FROM pilones WHERE numero_pilon = pa_numero_pilon) then
           SELECT "No se puede repetir el numero de pilon ",0;
           else
           
           INSERT INTO pilones(numero_pilon) VALUES (pa_numero_pilon);
           SELECT "Guardado correctamente",1;
           
           END IF;
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

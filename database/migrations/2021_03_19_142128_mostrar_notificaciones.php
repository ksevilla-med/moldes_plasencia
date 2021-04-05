<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MostrarNotificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `mostrar_notificaciones`');
    
        DB::unprepared('
        CREATE  PROCEDURE `mostrar_notificaciones`()

            BEGIN



            SELECT * FROM notificaciones WHERE notificaciones.activo = 0;


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

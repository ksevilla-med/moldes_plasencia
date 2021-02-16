<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MostrarUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP procedure if exists `mostrar_usuarios`');
    
        DB::unprepared('

       
            CREATE  PROCEDURE `mostrar_usuarios`()
            
            BEGIN

            SELECT  usuarios.id_usuario, plantas.nombre_planta,  usuarios.nombre_usuario, usuarios.correo,usuarios.codigo
                               FROM plantas, usuarios WHERE usuarios.id_planta = plantas.id_planta;
           
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

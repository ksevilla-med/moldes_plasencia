<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntradaPilones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('entrada_pilones', function (Blueprint $table) {
    //         $table->increments('id_tabaco')->required();
    //         $table->string('id_tabaco',50)->required();
    //         $table->string('id_pilon',50)->required();
    //         $table->date('fecha_entrada_pilon')->required();
    //         $table->string('tiempo_adelanto_pilon',50)->required();
    //         $table->date('fecha_estimada_salida')->required();
    //         $table->string('cantidad_lbs',50)->required();
    //         $table->timestamps();
    //    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('entrada_pilones');
   
    }
}

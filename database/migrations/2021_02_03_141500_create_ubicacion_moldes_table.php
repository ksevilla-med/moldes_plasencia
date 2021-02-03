<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionMoldesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_moldes', function (Blueprint $table) {
            $table->increments('id_ubicacion');
            $table->string('reparacion');
            $table->string('bodega');
            $table->string('salon');
            $table->char('id_figura');
            $table->char('id_vitola');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacion_moldes');
    }
}

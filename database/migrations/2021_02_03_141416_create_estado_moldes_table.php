<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoMoldesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_moldes', function (Blueprint $table) {
            $table->increments('id_estado');
            $table->string('bueno');
            $table->string('irregular');
            $table->string('malo');
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
        Schema::dropIfExists('estado_moldes');
    }

}

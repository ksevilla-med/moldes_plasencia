<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemisionProceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('remision_proceso', function (Blueprint $table) {
    //         $table->bigIncrements('id_remision_proceso')->required();
    //         $table->int('id_remision',100)->required();
    //         $table->date('fecha_remision')->required();
    //         $table->string('destino_remision',20)->required();
    //         $table->string('origen_remision',20)->required();
    //         $table->string('descripcion1_remision',100)->required();
    //         $table->decimal('cant_lbs_des_1',10,2)->required();
    //         $table->string('descripcion2_remision',100);
    //         $table->decimal('cant_lbs_des_2',10,2);
    //         $table->string('descripcion3_remision',100);
    //         $table->decimal('cant_lbs_des_3',10,2);
    //         $table->string('descripcion4_remision',100);
    //         $table->decimal('cant_lbs_des_4',10,2);
    //         $table->string('descripcion5_remision',100);
    //         $table->decimal('cant_lbs_des_5',10,2);
    //         $table->decimal('total_remision',10,2)->required();
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
        // Schema::dropIfExists('remision_proceso');
   
    }
}

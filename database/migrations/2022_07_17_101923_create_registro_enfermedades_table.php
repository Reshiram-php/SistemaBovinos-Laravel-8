<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEnfermedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_enfermedades', function (Blueprint $table) {
            $table->integer('registro_enfermedades_id', true);
            $table->string('animal_id')->default('desconocido');
            $table->integer('enfermedades_id');
            $table->string('enfermedad_estado');
            $table->date('enfermedad_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->date('enfermedad_fecha_tratamiento')->nullable();
            $table->string('enfermedad_tratamiento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_enfermedades');
    }
}

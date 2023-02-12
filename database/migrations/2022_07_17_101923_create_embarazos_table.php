<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbarazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarazos', function (Blueprint $table) {
            $table->integer('embarazos_id', true);
            $table->string('animal_madre')->default('desconocido');
            $table->date('embarazos_fecha');
            $table->string('animal_padre')->default('desconocido');
            $table->boolean('embarazo_activo');
            $table->softDeletes();
            $table->timestamps();
            $table->timestamp('fecha_aproximada')->nullable();
            $table->integer('monta_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embarazos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_vacunas', function (Blueprint $table) {
            $table->integer('registro_vacunas_id', true);
            $table->string('animal_id')->default('desconocido');
            $table->integer('vacuna_id');
            $table->date('registro_vacunas_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->timestamp('registro_vacunas_proxima')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_vacunas');
    }
}

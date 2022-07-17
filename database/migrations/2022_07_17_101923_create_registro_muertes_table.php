<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMuertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_muertes', function (Blueprint $table) {
            $table->integer('registro_muertes_id', true);
            $table->string('animal_id');
            $table->date('registro_muertes_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->string('registro_muertes_causa')->nullable();
            $table->integer('estado_anterior')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_muertes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_actividades', function (Blueprint $table) {
            $table->string('animal_id');
            $table->integer('actividades_id');
            $table->date('registro_actividades_fecha');
            $table->integer('registro_actividades_id', true);
            $table->softDeletes();
            $table->timestamps();
            $table->timestamp('registro_actividades_proxima')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_actividades');
    }
}

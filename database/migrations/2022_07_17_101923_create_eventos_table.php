<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('title');
            $table->string('descripcion');
            $table->timestamp('start');
            $table->timestamp('end');
            $table->timestamps();
            $table->string('id_user', 20)->nullable();
            $table->integer('monta_id')->nullable();
            $table->integer('embarazo_id')->nullable();
            $table->integer('actividades_id')->nullable();
            $table->integer('vacunas_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

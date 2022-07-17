<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->string('animal_id')->primary();
            $table->string('animal_madre')->nullable();
            $table->string('animal_padre')->nullable();
            $table->string('animal_color');
            $table->decimal('animal_peso', 10, 0);
            $table->integer('animal_raza');
            $table->string('animal_sexo');
            $table->integer('animal_categoria');
            $table->date('animal_nacimiento');
            $table->string('animal_imagen')->nullable();
            $table->integer('animal_estado');
            $table->softDeletes();
            $table->timestamps();
            $table->string('codigo_bien')->nullable();
            $table->integer('animal_produccion')->nullable();
            $table->boolean('animal_abierto');
            $table->timestamp('fecha_secado')->nullable();
            $table->decimal('animal_arete', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
}

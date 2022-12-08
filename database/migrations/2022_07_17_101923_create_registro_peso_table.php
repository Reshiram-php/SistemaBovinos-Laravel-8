<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroPesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_peso', function (Blueprint $table) {
            $table->integer('registro_peso_id', true);
            $table->string('animal_id');
            $table->date('registro_peso_fecha');
            $table->decimal('registro_peso_valor', 10, 0);
            $table->softDeletes();
            $table->timestamps();
            $table->decimal('peso_anterior', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_peso');
    }
}

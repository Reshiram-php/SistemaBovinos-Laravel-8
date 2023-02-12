<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbortosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abortos', function (Blueprint $table) {
            $table->integer('abortos_id', true);
            $table->string('animal_id')->default('desconocido');
            $table->string('abortos_tipo');
            $table->date('abortos_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->integer('embarazo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abortos');
    }
}

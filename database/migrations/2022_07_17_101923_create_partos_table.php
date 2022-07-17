<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partos', function (Blueprint $table) {
            $table->integer('partos_id', true);
            $table->string('partos_madre');
            $table->string('hijo_id');
            $table->date('partos_fecha');
            $table->string('partos_complicaciones');
            $table->string('partos_descripción')->nullable();
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
        Schema::dropIfExists('partos');
    }
}

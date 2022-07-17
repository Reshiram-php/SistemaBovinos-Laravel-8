<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monta', function (Blueprint $table) {
            $table->string('monta_madre');
            $table->string('monta_padre')->nullable();
            $table->date('monta_fecha');
            $table->string('monta_exitosa')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('monta_id', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monta');
    }
}

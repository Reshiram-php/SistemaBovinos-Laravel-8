<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroOrdeOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_ordeño', function (Blueprint $table) {
            $table->integer('registro_ordeño_id', true);
            $table->string('animal_id')->default('desconocido');
            $table->decimal('registro_ordeño_litros', 10, 0);
            $table->integer('registro_ordeño_cantidad');
            $table->date('registro_ordeño_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->integer('partos_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_ordeño');
    }
}

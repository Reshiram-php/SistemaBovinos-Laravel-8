<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('ventas_id', true);
            $table->string('animal_id');
            $table->decimal('ventas_valor', 10, 0);
            $table->date('ventas_fecha');
            $table->softDeletes();
            $table->timestamps();
            $table->string('cedula_cliente', 10);
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
        Schema::dropIfExists('ventas');
    }
}

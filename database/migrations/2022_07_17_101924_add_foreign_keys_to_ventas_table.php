<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'ventas_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE');
            $table->foreign(['cedula_cliente'], 'ventas_fk_2')->references(['cedula'])->on('cliente')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ventas', function (Blueprint $table) {
            $table->dropForeign('ventas_fk');
            $table->dropForeign('ventas_fk_2');
        });
    }
}

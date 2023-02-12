<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_actividades', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'registro_eventos_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['actividades_id'], 'registro_eventos_fk_1')->references(['actividades_id'])->on('actividades')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_actividades', function (Blueprint $table) {
            $table->dropForeign('registro_eventos_fk');
            $table->dropForeign('registro_eventos_fk_1');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_vacunas', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'registro_vacunas_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['vacuna_id'], 'registro_vacunas_fk_1')->references(['vacuna_id'])->on('vacunas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_vacunas', function (Blueprint $table) {
            $table->dropForeign('registro_vacunas_fk');
            $table->dropForeign('registro_vacunas_fk_1');
        });
    }
}

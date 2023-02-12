<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroPesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_peso', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'registro_peso_fk_animal')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_peso', function (Blueprint $table) {
            $table->dropForeign('registro_peso_fk_animal');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroMuertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_muertes', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'registro_muertes_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_muertes', function (Blueprint $table) {
            $table->dropForeign('registro_muertes_fk');
        });
    }
}

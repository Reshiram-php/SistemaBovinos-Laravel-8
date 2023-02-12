<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmbarazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('embarazos', function (Blueprint $table) {
            $table->foreign(['animal_madre'], 'embarazos_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['monta_id'], 'embarazos_fk_2')->references(['monta_id'])->on('monta')->onUpdate('CASCADE');
            $table->foreign(['animal_padre'], 'embarazos_fk_3')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('embarazos', function (Blueprint $table) {
            $table->dropForeign('embarazos_fk');
            $table->dropForeign('embarazos_fk_2');
            $table->dropForeign('embarazos_fk_3');
        });
    }
}

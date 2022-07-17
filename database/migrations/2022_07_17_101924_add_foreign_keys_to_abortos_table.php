<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAbortosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abortos', function (Blueprint $table) {
            $table->foreign(['animal_id'], 'abortos_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['embarazo_id'], 'abortos_fk_1')->references(['embarazos_id'])->on('embarazos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abortos', function (Blueprint $table) {
            $table->dropForeign('abortos_fk');
            $table->dropForeign('abortos_fk_1');
        });
    }
}

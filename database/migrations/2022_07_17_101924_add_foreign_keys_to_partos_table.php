<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partos', function (Blueprint $table) {
            $table->foreign(['hijo_id'], 'partos_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['partos_madre'], 'partos_fk_1')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['embarazo_id'], 'partos_fk_2')->references(['embarazos_id'])->on('embarazos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partos', function (Blueprint $table) {
            $table->dropForeign('partos_fk');
            $table->dropForeign('partos_fk_1');
            $table->dropForeign('partos_fk_2');
        });
    }
}

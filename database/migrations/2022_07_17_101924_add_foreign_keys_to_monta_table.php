<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMontaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monta', function (Blueprint $table) {
            $table->foreign(['monta_madre'], 'monta_fk')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
            $table->foreign(['monta_padre'], 'monta_fk_2')->references(['animal_id'])->on('animal')->onUpdate('CASCADE')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monta', function (Blueprint $table) {
            $table->dropForeign('monta_fk');
            $table->dropForeign('monta_fk_2');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animal', function (Blueprint $table) {
            $table->foreign(['animal_categoria'], 'animal_fk')->references(['categoria_id'])->on('categoria');
            $table->foreign(['animal_estado'], 'animal_fk_estado')->references(['estados_id'])->on('estados');
            $table->foreign(['animal_produccion'], 'animal_fk_produccion')->references(['produccion_id'])->on('produccion');
            $table->foreign(['animal_raza'], 'animal_fk_raza')->references(['raza_id'])->on('raza')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animal', function (Blueprint $table) {
            $table->dropForeign('animal_fk');
            $table->dropForeign('animal_fk_estado');
            $table->dropForeign('animal_fk_produccion');
            $table->dropForeign('animal_fk_raza');
        });
    }
}

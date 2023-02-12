<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cliente')->delete();

        \DB::table('cliente')->insert(array(
            0 =>
            array(
                'cedula' => '1111111111',
                'nombre' => 'desconocido',
                'teléfono' => null,
                'deleted_at' => null,
                'created_at' => '2022-06-20 16:26:41',
                'updated_at' => '2022-06-22 09:12:56',
            ),
        ));
    }
}

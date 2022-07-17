<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegistroMuertesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('registro_muertes')->delete();
        
        \DB::table('registro_muertes')->insert(array (
            0 => 
            array (
                'registro_muertes_id' => 1,
                'animal_id' => 'MES0041',
                'registro_muertes_fecha' => '2021-04-11',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 14:02:06',
                'updated_at' => '2022-06-20 14:02:06',
                'registro_muertes_causa' => 'HEMOPARASITOS',
                'estado_anterior' => 1,
            ),
            1 => 
            array (
                'registro_muertes_id' => 2,
                'animal_id' => 'MES0030',
                'registro_muertes_fecha' => '2021-07-05',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 14:04:38',
                'updated_at' => '2022-06-20 14:04:38',
                'registro_muertes_causa' => 'MUERTE POR ATASCAMIENTO EN FANGO',
                'estado_anterior' => 1,
            ),
            2 => 
            array (
                'registro_muertes_id' => 3,
                'animal_id' => 'MES0042',
                'registro_muertes_fecha' => '2022-03-29',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 14:06:12',
                'updated_at' => '2022-06-20 14:06:12',
                'registro_muertes_causa' => 'MORDEDURA DE SERPIENTE',
                'estado_anterior' => 1,
            ),
            3 => 
            array (
                'registro_muertes_id' => 4,
                'animal_id' => 'MBG0010',
                'registro_muertes_fecha' => '2017-04-13',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 13:32:27',
                'updated_at' => '2022-06-20 13:32:27',
                'registro_muertes_causa' => 'PROCESO HEMORRAGICO INTESTINAL',
                'estado_anterior' => 1,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PartosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('partos')->delete();
        
        \DB::table('partos')->insert(array (
            0 => 
            array (
                'partos_id' => 1,
                'partos_madre' => 'MES0006',
                'hijo_id' => 'MES0014',
                'partos_fecha' => '2020-04-25',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 1,
            ),
            1 => 
            array (
                'partos_id' => 2,
                'partos_madre' => 'MES0003',
                'hijo_id' => 'MES0019',
                'partos_fecha' => '2020-06-30',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 2,
            ),
            2 => 
            array (
                'partos_id' => 3,
                'partos_madre' => 'MES0005',
                'hijo_id' => 'MES0021',
                'partos_fecha' => '2021-04-24',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 4,
            ),
            3 => 
            array (
                'partos_id' => 4,
                'partos_madre' => 'MES0008',
                'hijo_id' => 'MES0020',
                'partos_fecha' => '2021-03-29',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 3,
            ),
            4 => 
            array (
                'partos_id' => 5,
                'partos_madre' => 'HOL0001',
                'hijo_id' => 'MES0022',
                'partos_fecha' => '2021-05-03',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 5,
            ),
            5 => 
            array (
                'partos_id' => 6,
                'partos_madre' => 'MES0012',
                'hijo_id' => 'MES0023',
                'partos_fecha' => '2021-11-06',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 6,
            ),
            6 => 
            array (
                'partos_id' => 7,
                'partos_madre' => 'MES0006',
                'hijo_id' => 'MES0024',
                'partos_fecha' => '2021-12-08',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 7,
            ),
            7 => 
            array (
                'partos_id' => 8,
                'partos_madre' => 'MES0009',
                'hijo_id' => 'MES0025',
                'partos_fecha' => '2021-12-31',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 8,
            ),
            8 => 
            array (
                'partos_id' => 9,
                'partos_madre' => 'MES0011',
                'hijo_id' => 'MES0026',
                'partos_fecha' => '2020-04-23',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 9,
            ),
            9 => 
            array (
                'partos_id' => 10,
                'partos_madre' => 'MES0010',
                'hijo_id' => 'MES0027',
                'partos_fecha' => '2020-04-24',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 10,
            ),
            10 => 
            array (
                'partos_id' => 11,
                'partos_madre' => 'MES0013',
                'hijo_id' => 'MGH0001',
                'partos_fecha' => '2020-04-28',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 11,
            ),
            11 => 
            array (
                'partos_id' => 12,
                'partos_madre' => 'HOL0001',
                'hijo_id' => 'MES0028',
                'partos_fecha' => '2020-04-30',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 12,
            ),
            12 => 
            array (
                'partos_id' => 13,
                'partos_madre' => 'MES0012',
                'hijo_id' => 'MES0029',
                'partos_fecha' => '2020-06-24',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 13,
            ),
            13 => 
            array (
                'partos_id' => 14,
                'partos_madre' => 'GYR0002',
                'hijo_id' => 'MES0030',
                'partos_fecha' => '2020-07-08',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 14,
            ),
            14 => 
            array (
                'partos_id' => 15,
                'partos_madre' => 'GYR0001',
                'hijo_id' => 'MES0031',
                'partos_fecha' => '2021-03-29',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 15,
            ),
            15 => 
            array (
                'partos_id' => 16,
                'partos_madre' => 'MES0001',
                'hijo_id' => 'MES0032',
                'partos_fecha' => '2020-04-23',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 16,
            ),
            16 => 
            array (
                'partos_id' => 17,
                'partos_madre' => 'MES0007',
                'hijo_id' => 'MES0033',
                'partos_fecha' => '2021-05-13',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 17,
            ),
            17 => 
            array (
                'partos_id' => 18,
                'partos_madre' => 'MES0013',
                'hijo_id' => 'MES0035',
                'partos_fecha' => '2021-09-13',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 18,
            ),
            18 => 
            array (
                'partos_id' => 19,
                'partos_madre' => 'MES0002',
                'hijo_id' => 'MES0036',
                'partos_fecha' => '2021-09-15',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 19,
            ),
            19 => 
            array (
                'partos_id' => 20,
                'partos_madre' => 'MES0003',
                'hijo_id' => 'MES0038',
                'partos_fecha' => '2022-02-20',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 20,
            ),
            20 => 
            array (
                'partos_id' => 21,
                'partos_madre' => 'MES0011',
                'hijo_id' => 'MES0039',
                'partos_fecha' => '2022-03-25',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 21,
            ),
            21 => 
            array (
                'partos_id' => 22,
                'partos_madre' => 'MES0010',
                'hijo_id' => 'MES0040',
                'partos_fecha' => '2022-03-28',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 22,
            ),
            22 => 
            array (
                'partos_id' => 23,
                'partos_madre' => 'MBG0001',
                'hijo_id' => 'MES0034',
                'partos_fecha' => '2021-05-19',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 23,
            ),
            23 => 
            array (
                'partos_id' => 24,
                'partos_madre' => 'MBG0004',
                'hijo_id' => 'MES0037',
                'partos_fecha' => '2021-12-11',
                'partos_complicaciones' => 'NO',
                'partos_descripción' => 'Ninguno',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'embarazo_id' => 24,
            ),
        ));
        
        
    }
}
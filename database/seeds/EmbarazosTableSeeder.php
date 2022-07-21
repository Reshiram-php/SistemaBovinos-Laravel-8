<?php

use Illuminate\Database\Seeder;

class EmbarazosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('embarazos')->delete();
        
        \DB::table('embarazos')->insert(array (
            0 => 
            array (
                
                'animal_madre' => 'MES0006',
                'embarazos_fecha' => '2019-07-19',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:18:44',
                'updated_at' => '2022-06-23 10:18:44',
                'fecha_aproximada' => '2020-04-23 00:00:00',
                'monta_id' => 1,
            ),
            1 => 
            array (
                
                'animal_madre' => 'MES0003',
                'embarazos_fecha' => '2019-09-25',
                'animal_padre' => 'BRA0001',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:22:07',
                'updated_at' => '2022-06-23 10:22:07',
                'fecha_aproximada' => '2020-06-30 00:00:00',
                'monta_id' => 2,
            ),
            2 => 
            array (
                
                'animal_madre' => 'MES0008',
                'embarazos_fecha' => '2020-06-23',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:34:57',
                'updated_at' => '2022-06-23 10:34:57',
                'fecha_aproximada' => '2021-03-29 00:00:00',
                'monta_id' => 3,
            ),
            3 => 
            array (
                
                'animal_madre' => 'MES0005',
                'embarazos_fecha' => '2020-07-19',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:36:01',
                'updated_at' => '2022-06-23 10:36:01',
                'fecha_aproximada' => '2021-04-24 00:00:00',
                'monta_id' => 4,
            ),
            4 => 
            array (
                
                'animal_madre' => 'HOL0001',
                'embarazos_fecha' => '2020-07-28',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:37:02',
                'updated_at' => '2022-06-23 10:37:02',
                'fecha_aproximada' => '2021-05-03 00:00:00',
                'monta_id' => 5,
            ),
            5 => 
            array (
                
                'animal_madre' => 'MES0012',
                'embarazos_fecha' => '2021-01-31',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:38:01',
                'updated_at' => '2022-06-23 10:38:01',
                'fecha_aproximada' => '2021-11-06 00:00:00',
                'monta_id' => 6,
            ),
            6 => 
            array (
                
                'animal_madre' => 'MES0006',
                'embarazos_fecha' => '2021-03-04',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:43:12',
                'updated_at' => '2022-06-23 10:43:12',
                'fecha_aproximada' => '2021-12-08 00:00:00',
                'monta_id' => 7,
            ),
            7 => 
            array (
                
                'animal_madre' => 'MES0009',
                'embarazos_fecha' => '2021-03-27',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:44:37',
                'updated_at' => '2022-06-23 10:44:37',
                'fecha_aproximada' => '2021-12-31 00:00:00',
                'monta_id' => 8,
            ),
            8 => 
            array (
                
                'animal_madre' => 'MES0011',
                'embarazos_fecha' => '2019-07-19',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:45:35',
                'updated_at' => '2022-06-23 10:45:35',
                'fecha_aproximada' => '2020-04-23 00:00:00',
                'monta_id' => 9,
            ),
            9 => 
            array (
                
                'animal_madre' => 'MES0010',
                'embarazos_fecha' => '2019-07-20',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:46:46',
                'updated_at' => '2022-06-23 10:46:46',
                'fecha_aproximada' => '2020-04-24 00:00:00',
                'monta_id' => 10,
            ),
            10 => 
            array (
            
                'animal_madre' => 'MES0013',
                'embarazos_fecha' => '2019-07-24',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:48:50',
                'updated_at' => '2022-06-23 10:48:50',
                'fecha_aproximada' => '2020-04-28 00:00:00',
                'monta_id' => 11,
            ),
            11 => 
            array (
                
                'animal_madre' => 'HOL0001',
                'embarazos_fecha' => '2019-07-26',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:51:33',
                'updated_at' => '2022-06-23 10:51:33',
                'fecha_aproximada' => '2020-04-30 00:00:00',
                'monta_id' => 12,
            ),
            12 => 
            array (
                
                'animal_madre' => 'MES0012',
                'embarazos_fecha' => '2019-09-19',
                'animal_padre' => 'BRA0001',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:53:32',
                'updated_at' => '2022-06-23 10:53:32',
                'fecha_aproximada' => '2020-06-24 00:00:00',
                'monta_id' => 13,
            ),
            13 => 
            array (
                
                'animal_madre' => 'GYR0002',
                'embarazos_fecha' => '2019-10-03',
                'animal_padre' => 'BRA0001',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:54:27',
                'updated_at' => '2022-06-23 10:54:27',
                'fecha_aproximada' => '2020-07-08 00:00:00',
                'monta_id' => 14,
            ),
            14 => 
            array (
                
                'animal_madre' => 'GYR0001',
                'embarazos_fecha' => '2020-06-22',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:55:34',
                'updated_at' => '2022-06-23 10:55:34',
                'fecha_aproximada' => '2021-03-28 00:00:00',
                'monta_id' => 15,
            ),
            15 => 
            array (
                
                'animal_madre' => 'MES0001',
                'embarazos_fecha' => '2020-06-23',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:00:00',
                'updated_at' => '2022-06-23 11:00:00',
                'fecha_aproximada' => '2021-03-29 00:00:00',
                'monta_id' => 16,
            ),
            16 => 
            array (
                
                'animal_madre' => 'MES0007',
                'embarazos_fecha' => '2020-08-07',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:01:06',
                'updated_at' => '2022-06-23 11:01:06',
                'fecha_aproximada' => '2021-05-13 00:00:00',
                'monta_id' => 17,
            ),
            17 => 
            array (
                
                'animal_madre' => 'MES0013',
                'embarazos_fecha' => '2020-12-08',
                'animal_padre' => 'inseminación',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:05:23',
                'updated_at' => '2022-06-23 11:05:23',
                'fecha_aproximada' => '2021-09-13 00:00:00',
                'monta_id' => 18,
            ),
            18 => 
            array (
                
                'animal_madre' => 'MES0002',
                'embarazos_fecha' => '2020-12-10',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:06:03',
                'updated_at' => '2022-06-23 11:06:03',
                'fecha_aproximada' => '2021-09-15 00:00:00',
                'monta_id' => 19,
            ),
            19 => 
            array (
                
                'animal_madre' => 'MES0003',
                'embarazos_fecha' => '2021-05-17',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:08:08',
                'updated_at' => '2022-06-23 11:08:08',
                'fecha_aproximada' => '2022-02-20 00:00:00',
                'monta_id' => 20,
            ),
            20 => 
            array (
                
                'animal_madre' => 'MES0011',
                'embarazos_fecha' => '2021-06-19',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:10:15',
                'updated_at' => '2022-06-23 11:10:15',
                'fecha_aproximada' => '2022-03-25 00:00:00',
                'monta_id' => 21,
            ),
            21 => 
            array (
                
                'animal_madre' => 'MES0010',
                'embarazos_fecha' => '2021-06-22',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:11:59',
                'updated_at' => '2022-06-23 11:11:59',
                'fecha_aproximada' => '2022-03-28 00:00:00',
                'monta_id' => 22,
            ),
            22 => 
            array (
                
                'animal_madre' => 'MBG0001',
                'embarazos_fecha' => '2020-10-13',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:13:02',
                'updated_at' => '2022-06-23 11:13:02',
                'fecha_aproximada' => '2021-07-19 00:00:00',
                'monta_id' => 23,
            ),
            23 => 
            array (
                
                'animal_madre' => 'MBG0004',
                'embarazos_fecha' => '2021-03-07',
                'animal_padre' => 'MBG0009',
                'embarazo_activo' => false,
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:14:26',
                'updated_at' => '2022-06-23 11:14:26',
                'fecha_aproximada' => '2021-12-11 00:00:00',
                'monta_id' => 24,
            ),
        ));
        
        
    }
}
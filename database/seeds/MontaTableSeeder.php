<?php

use Illuminate\Database\Seeder;

class MontaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('monta')->delete();
        
        \DB::table('monta')->insert(array (
            0 => 
            array (
                'monta_madre' => 'MES0006',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2019-07-19',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:18:34',
                'updated_at' => '2022-06-23 10:18:44',
                
            ),
            1 => 
            array (
                'monta_madre' => 'MES0003',
                'monta_padre' => 'BRA0001',
                'monta_fecha' => '2019-09-25',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:21:47',
                'updated_at' => '2022-06-23 10:22:07',
                
            ),
            2 => 
            array (
                'monta_madre' => 'MES0008',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-06-23',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:34:53',
                'updated_at' => '2022-06-23 10:34:57',
                
            ),
            3 => 
            array (
                'monta_madre' => 'MES0005',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-07-19',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:35:57',
                'updated_at' => '2022-06-23 10:36:01',
                
            ),
            4 => 
            array (
                'monta_madre' => 'HOL0001',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-07-28',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:36:56',
                'updated_at' => '2022-06-23 10:37:02',
                
            ),
            5 => 
            array (
                'monta_madre' => 'MES0012',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-01-31',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:37:53',
                'updated_at' => '2022-06-23 10:38:01',
                
            ),
            6 => 
            array (
                'monta_madre' => 'MES0006',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-03-04',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:43:03',
                'updated_at' => '2022-06-23 10:43:12',
                
            ),
            7 => 
            array (
                'monta_madre' => 'MES0009',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-03-27',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:44:22',
                'updated_at' => '2022-06-23 10:44:37',
                
            ),
            8 => 
            array (
                'monta_madre' => 'MES0011',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2019-07-19',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:45:29',
                'updated_at' => '2022-06-23 10:45:35',
                
            ),
            9 => 
            array (
                'monta_madre' => 'MES0010',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2019-07-20',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:46:40',
                'updated_at' => '2022-06-23 10:46:46',
                
            ),
            10 => 
            array (
                'monta_madre' => 'MES0013',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2019-07-24',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:48:44',
                'updated_at' => '2022-06-23 10:48:50',
                
            ),
            11 => 
            array (
                'monta_madre' => 'HOL0001',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2019-07-26',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:51:26',
                'updated_at' => '2022-06-23 10:51:33',
                
            ),
            12 => 
            array (
                'monta_madre' => 'MES0012',
                'monta_padre' => 'BRA0001',
                'monta_fecha' => '2019-09-19',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:53:26',
                'updated_at' => '2022-06-23 10:53:32',
                
            ),
            13 => 
            array (
                'monta_madre' => 'GYR0002',
                'monta_padre' => 'BRA0001',
                'monta_fecha' => '2019-10-03',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:54:21',
                'updated_at' => '2022-06-23 10:54:27',
                
            ),
            14 => 
            array (
                'monta_madre' => 'GYR0001',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-06-22',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:55:29',
                'updated_at' => '2022-06-23 10:55:34',
                
            ),
            15 => 
            array (
                'monta_madre' => 'MES0001',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-06-23',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 10:59:44',
                'updated_at' => '2022-06-23 11:00:00',
                
            ),
            16 => 
            array (
                'monta_madre' => 'MES0007',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-08-07',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:01:00',
                'updated_at' => '2022-06-23 11:01:06',
                
            ),
            17 => 
            array (
                'monta_madre' => 'MES0013',
                'monta_padre' => 'inseminación',
                'monta_fecha' => '2020-12-08',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:05:18',
                'updated_at' => '2022-06-23 11:05:23',
                
            ),
            18 => 
            array (
                'monta_madre' => 'MES0002',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-12-10',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:05:58',
                'updated_at' => '2022-06-23 11:06:03',
                
            ),
            19 => 
            array (
                'monta_madre' => 'MES0003',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-05-17',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:08:01',
                'updated_at' => '2022-06-23 11:08:08',
                
            ),
            20 => 
            array (
                'monta_madre' => 'MES0011',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-06-19',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:10:09',
                'updated_at' => '2022-06-23 11:10:15',
                
            ),
            21 => 
            array (
                'monta_madre' => 'MES0010',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-06-22',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:11:27',
                'updated_at' => '2022-06-23 11:11:59',
                
            ),
            22 => 
            array (
                'monta_madre' => 'MBG0001',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2020-10-13',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:12:53',
                'updated_at' => '2022-06-23 11:13:02',
                
            ),
            23 => 
            array (
                'monta_madre' => 'MBG0004',
                'monta_padre' => 'MBG0009',
                'monta_fecha' => '2021-03-07',
                'monta_exitosa' => 'Si',
                'deleted_at' => NULL,
                'created_at' => '2022-06-23 11:14:21',
                'updated_at' => '2022-06-23 11:14:26',
                
            ),
        ));
        
        
    }
}
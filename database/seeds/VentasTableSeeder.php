<?php

use Illuminate\Database\Seeder;

class VentasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ventas')->delete();
        
        \DB::table('ventas')->insert(array (
            0 => 
            array (
                'ventas_id' => 1,
                'animal_id' => 'MES0043',
                'ventas_valor' => '300',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:29:13',
                'updated_at' => '2022-06-20 16:29:13',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            1 => 
            array (
                'ventas_id' => 2,
                'animal_id' => 'MES0044',
                'ventas_valor' => '250',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:29:56',
                'updated_at' => '2022-06-20 16:29:56',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            2 => 
            array (
                'ventas_id' => 3,
                'animal_id' => 'MES0045',
                'ventas_valor' => '300',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:30:53',
                'updated_at' => '2022-06-20 16:30:53',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            3 => 
            array (
                'ventas_id' => 4,
                'animal_id' => 'MES0046',
                'ventas_valor' => '150',
                'ventas_fecha' => '2018-05-15',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:32:02',
                'updated_at' => '2022-06-20 16:32:02',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            4 => 
            array (
                'ventas_id' => 5,
                'animal_id' => 'MES0047',
                'ventas_valor' => '200',
                'ventas_fecha' => '2016-08-29',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:33:08',
                'updated_at' => '2022-06-20 16:33:08',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            5 => 
            array (
                'ventas_id' => 6,
                'animal_id' => 'BRA0001',
                'ventas_valor' => '1010',
                'ventas_fecha' => '2020-02-28',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:33:40',
                'updated_at' => '2022-06-20 16:33:40',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            6 => 
            array (
                'ventas_id' => 7,
                'animal_id' => 'MBG0011',
                'ventas_valor' => '200',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:26:41',
                'updated_at' => '2022-06-20 16:26:41',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            7 => 
            array (
                'ventas_id' => 8,
                'animal_id' => 'MBG0012',
                'ventas_valor' => '100',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:27:50',
                'updated_at' => '2022-06-20 16:27:50',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
            8 => 
            array (
                'ventas_id' => 9,
                'animal_id' => 'MBG0013',
                'ventas_valor' => '100',
                'ventas_fecha' => '2018-09-10',
                'deleted_at' => NULL,
                'created_at' => '2022-06-20 16:28:24',
                'updated_at' => '2022-06-20 16:28:24',
                'cedula_cliente' => '1111111113',
                'estado_anterior' => 1,
            ),
        ));
        
        
    }
}
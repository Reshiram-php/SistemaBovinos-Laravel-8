<?php

use Illuminate\Database\Seeder;

class RazaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('raza')->delete();
        
        \DB::table('raza')->insert(array (
            0 => 
            array (
                'raza_nombre' => 'default',
                'raza_id' => 0,
                'acr' => 'ZZZ',
            ),
            1 => 
            array (
                'raza_nombre' => 'Mestizo',
                'raza_id' => 1,
                'acr' => 'MES',
            ),
            2 => 
            array (
                'raza_nombre' => 'Pardo Suizo',
                'raza_id' => 2,
                'acr' => 'PRS',
            ),
            3 => 
            array (
                'raza_nombre' => 'Holstein',
                'raza_id' => 3,
                'acr' => 'HOL',
            ),
            4 => 
            array (
                'raza_nombre' => 'Jersey',
                'raza_id' => 4,
                'acr' => 'JER',
            ),
            5 => 
            array (
                'raza_nombre' => 'Hereford',
                'raza_id' => 5,
                'acr' => 'HER',
            ),
            6 => 
            array (
                'raza_nombre' => 'Angus Rojo',
                'raza_id' => 6,
                'acr' => 'ANR',
            ),
            7 => 
            array (
                'raza_nombre' => 'Brahaman',
                'raza_id' => 7,
                'acr' => 'BRA',
            ),
            8 => 
            array (
                'raza_nombre' => 'Gyr',
                'raza_id' => 8,
                'acr' => 'GYR',
            ),
            9 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y GYR)',
                'raza_id' => 9,
                'acr' => 'MBG',
            ),
            10 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y Holstein)',
                'raza_id' => 10,
                'acr' => 'MBH',
            ),
            11 => 
            array (
            'raza_nombre' => 'Mestizo(GRY HOLAND)',
                'raza_id' => 11,
                'acr' => 'MGH',
            ),
        ));
        
        
    }
}
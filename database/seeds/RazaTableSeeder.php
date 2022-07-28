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
                'acr' => 'ZZZ',
            ),
            1 => 
            array (
                'raza_nombre' => 'Mestizo',
                
                'acr' => 'MES',
            ),
            2 => 
            array (
                'raza_nombre' => 'Pardo Suizo',
                
                'acr' => 'PRS',
            ),
            3 => 
            array (
                'raza_nombre' => 'Holstein',
                
                'acr' => 'HOL',
            ),
            4 => 
            array (
                'raza_nombre' => 'Jersey',
                
                'acr' => 'JER',
            ),
            5 => 
            array (
                'raza_nombre' => 'Hereford',
                
                'acr' => 'HER',
            ),
            6 => 
            array (
                'raza_nombre' => 'Angus Rojo',
                
                'acr' => 'ANR',
            ),
            7 => 
            array (
                'raza_nombre' => 'Brahaman',
                
                'acr' => 'BRA',
            ),
            8 => 
            array (
                'raza_nombre' => 'Gyr',
                
                'acr' => 'GYR',
            ),
            9 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y GYR)',
                
                'acr' => 'MBG',
            ),
            10 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y Holstein)',
                
                'acr' => 'MBH',
            ),
            11 => 
            array (
            'raza_nombre' => 'Mestizo(GRY HOLAND)',
                
                'acr' => 'MGH',
            ),
        ));
        
        
    }
}
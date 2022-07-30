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
                'raza_nombre' => 'Holstein',
                
                'acr' => 'HOL',
            ),
            
            3 => 
            array (
                'raza_nombre' => 'Brahaman',
                
                'acr' => 'BRA',
            ),
            4 => 
            array (
                'raza_nombre' => 'Gyr',
                
                'acr' => 'GYR',
            ),
            5 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y GYR)',
                
                'acr' => 'MBG',
            ),
            6 => 
            array (
            'raza_nombre' => 'Mestizo(Brown Suis y Holstein)',
                
                'acr' => 'MBH',
            ),
            7 => 
            array (
            'raza_nombre' => 'Mestizo(GRY HOLAND)',
                
                'acr' => 'MGH',
            ),
        ));
        
        
    }
}
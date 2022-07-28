<?php

use Illuminate\Database\Seeder;

class VacunasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vacunas')->delete();
        
        \DB::table('vacunas')->insert(array (
            0 => 
            array (
                
                'vacuna_nombre' => 'Triple dosis única',
                'vacuna_nivel' => 1,
            ),
            1 => 
            array (
                
                'vacuna_nombre' => 'Neumoentritis',
                'vacuna_nivel' => 1,
            ),
            2 => 
            array (
                
                'vacuna_nombre' => 'Brucelosis',
                'vacuna_nivel' => 1,
            ),
            3 => 
            array (
                
                'vacuna_nombre' => 'Aftosa',
                'vacuna_nivel' => NULL,
            ),
            4 => 
            array (
                
                'vacuna_nombre' => 'Triple',
                'vacuna_nivel' => 2,
            ),
            5 => 
            array (
                
                'vacuna_nombre' => 'Sindrome Respiratorio',
                'vacuna_nivel' => 3,
            ),
            6 => 
            array (
                
                'vacuna_nombre' => 'Triple',
                'vacuna_nivel' => 3,
            ),
        ));
        
        
    }
}
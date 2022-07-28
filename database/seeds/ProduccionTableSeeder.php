<?php

use Illuminate\Database\Seeder;

class ProduccionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produccion')->delete();
        
        \DB::table('produccion')->insert(array (
            0 => 
            array (
                
                'produccion_nombre' => 'ninguno',
            ),
            1 => 
            array (
                
                'produccion_nombre' => 'lactando',
            ),
            2 => 
            array (
                
                'produccion_nombre' => 'período seco',
            ),
        ));
        
        
    }
}
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
                'produccion_id' => 1,
                'produccion_nombre' => 'ninguno',
            ),
            1 => 
            array (
                'produccion_id' => 2,
                'produccion_nombre' => 'lactando',
            ),
            2 => 
            array (
                'produccion_id' => 3,
                'produccion_nombre' => 'período seco',
            ),
        ));
        
        
    }
}
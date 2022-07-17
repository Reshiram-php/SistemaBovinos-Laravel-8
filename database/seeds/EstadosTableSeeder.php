<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'estados_id' => 1,
                'estados_nombre' => 'Normal',
            ),
            1 => 
            array (
                'estados_id' => 2,
                'estados_nombre' => 'Fallecido',
            ),
            2 => 
            array (
                'estados_id' => 3,
                'estados_nombre' => 'Vendido',
            ),
            3 => 
            array (
                'estados_id' => 4,
                'estados_nombre' => 'Gestando',
            ),
            4 => 
            array (
                'estados_id' => 5,
                'estados_nombre' => 'Inseminada',
            ),
        ));
        
        
    }
}
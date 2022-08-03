<?php
namespace Database\Seeders;
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
                
                'estados_nombre' => 'Normal',
            ),
            1 => 
            array (
                
                'estados_nombre' => 'Fallecido',
            ),
            2 => 
            array (
                
                'estados_nombre' => 'Vendido',
            ),
            3 => 
            array (
                
                'estados_nombre' => 'Gestando',
            ),
            4 => 
            array (
                
                'estados_nombre' => 'Inseminada',
            ),
        ));
        
        
    }
}
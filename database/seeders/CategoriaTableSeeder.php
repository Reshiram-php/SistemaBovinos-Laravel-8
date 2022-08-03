<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categoria')->delete();
        
        \DB::table('categoria')->insert(array (
            0 => 
            array (
                'categoria_nombre' => 'Ternero',
                
                'categoria_nivel' => 1,
            ),
            1 => 
            array (
                'categoria_nombre' => 'Torete',
                
                'categoria_nivel' => 2,
            ),
            2 => 
            array (
                'categoria_nombre' => 'Vacona',
                
                'categoria_nivel' => 2,
            ),
            3 => 
            array (
                'categoria_nombre' => 'Toro',
                
                'categoria_nivel' => 3,
            ),
            4 => 
            array (
                'categoria_nombre' => 'Vaca',
                
                'categoria_nivel' => 3,
            ),
        ));
        
        
    }
}
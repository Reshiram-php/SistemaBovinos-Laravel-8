<?php

use Illuminate\Database\Seeder;

class DescripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('descripciones')->delete();
        
        \DB::table('descripciones')->insert(array (
            0 => 
            array (
                'descripcion' => 'todas',
            ),
            1 => 
            array (
                'descripcion' => 'terneros',
            ),
            2 => 
            array (
                'descripcion' => 'toretes y vaconas',
            ),
            3 => 
            array (
                'descripcion' => 'toros y vacas',
            ),
            4 => 
            array (
                'descripcion' => 'terneros, toretes y vaconas',
            ),
            5 => 
            array (
                'descripcion' => 'terneros, toros y vacas',
            ),
            6 => 
            array (
                'descripcion' => 'toretes, vaconas, toros y vacas',
            ),
        ));
        
    }
}

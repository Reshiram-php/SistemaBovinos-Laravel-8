<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActividadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actividades')->delete();
        
        \DB::table('actividades')->insert(array (
            0 => 
            array (
                'actividades_id' => 1,
                'actividades_nombre' => 'Desparacitación y vitaminas AD3E Dosis Única',
                'actividades_nivel' => 1,
            ),
            1 => 
            array (
                'actividades_id' => 2,
                'actividades_nombre' => 'Descornes',
                'actividades_nivel' => 1,
            ),
            2 => 
            array (
                'actividades_id' => 3,
                'actividades_nombre' => 'Castración',
                'actividades_nivel' => 1,
            ),
            3 => 
            array (
                'actividades_id' => 4,
                'actividades_nombre' => 'Limpiezade Ombligo',
                'actividades_nivel' => 1,
            ),
            4 => 
            array (
                'actividades_id' => 5,
                'actividades_nombre' => 'Tatuaje',
                'actividades_nivel' => 1,
            ),
            5 => 
            array (
                'actividades_id' => 6,
                'actividades_nombre' => 'Desparacitación y vitaminas AD3E',
                'actividades_nivel' => 2,
            ),
            6 => 
            array (
                'actividades_id' => 7,
                'actividades_nombre' => 'Revisión de estados fisiológicos',
                'actividades_nivel' => 2,
            ),
            7 => 
            array (
                'actividades_id' => 8,
                'actividades_nombre' => 'Baños de control de moscas y garrapatas',
                'actividades_nivel' => 2,
            ),
        ));
        
        
    }
}
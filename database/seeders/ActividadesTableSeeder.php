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
                'actividades_nombre' => 'Desparacitación y vitaminas AD3E Dosis Única',
                'actividades_nivel' => 1,
            ),
            1 => 
            array (
                
                'actividades_nombre' => 'Descornes',
                'actividades_nivel' => 1,
            ),
            2 => 
            array (
                
                'actividades_nombre' => 'Castración',
                'actividades_nivel' => 1,
            ),
            3 => 
            array (
                
                'actividades_nombre' => 'Limpiezade Ombligo',
                'actividades_nivel' => 1,
            ),
            4 => 
            array (
            
                'actividades_nombre' => 'Tatuaje',
                'actividades_nivel' => 1,
            ),
            5 => 
            array (
                
                'actividades_nombre' => 'Desparacitación y vitaminas AD3E',
                'actividades_nivel' => 2,
            ),
            6 => 
            array (
                
                'actividades_nombre' => 'Revisión de estados fisiológicos',
                'actividades_nivel' => 2,
            ),
            7 => 
            array (
                
                'actividades_nombre' => 'Baños de control de moscas y garrapatas',
                'actividades_nivel' => 2,
            ),
        ));
        
        
    }
}
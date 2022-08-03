<?php
namespace Database\Seeders;
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
                'vacuna_descripcion' => 2,
                'vacuna_dias'=>null,
                'tipo_dosis'=>"unica",
            ),
            1 => 
            array (
                
                'vacuna_nombre' => 'Neumoentritis',
                'vacuna_descripcion' => 2,
                'vacuna_dias'=>null,
                'tipo_dosis'=>"unica",
            ),
            2 => 
            array (
                
                'vacuna_nombre' => 'Brucelosis',
                'vacuna_descripcion' => 2,
                'vacuna_dias'=>null,
                'tipo_dosis'=>"unica",
            ),
            3 => 
            array (
                
                'vacuna_nombre' => 'Aftosa',
                'vacuna_descripcion' => 1,
                'vacuna_dias'=>183,
                'tipo_dosis'=>"cada_cierto_tiempo",
            ),
            4 => 
            array (
                
                'vacuna_nombre' => 'Triple',
                'vacuna_descripcion' => 7,
                'vacuna_dias'=>183,
                'tipo_dosis'=>"cada_cierto_tiempo",
            ),
            5 => 
            array (
                
                'vacuna_nombre' => 'Sindrome Respiratorio',
                'vacuna_descripcion' => 4,
                'vacuna_dias'=>365,
                'tipo_dosis'=>"cada_cierto_tiempo",
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('mes'=> 'Enero','cantidad'=> 10),
            array('mes'=> 'Febrero','cantidad'=> 10),
            array('mes'=> 'Marzo','cantidad'=> 10),
            array('mes'=> 'Abril','cantidad'=> 10),
            array('mes'=> 'Mayo','cantidad'=> 10),
            array('mes'=> 'junio','cantidad'=> 10),
            array('mes'=> 'Julio','cantidad'=> 10),
            array('mes'=> 'Agosto','cantidad'=> 10),
        ];
        Envio::insert($data);

    }
}

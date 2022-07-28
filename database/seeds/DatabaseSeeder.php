<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(RoleSeeder::class);
        $this->call(ActividadesTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(ProduccionTableSeeder::class);
        $this->call(RazaTableSeeder::class);
        $this->call(VacunasTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
        $this->call(RegistroMuertesTableSeeder::class);
        $this->call(VentasTableSeeder::class);
        $this->call(MontaTableSeeder::class);
        $this->call(EmbarazosTableSeeder::class);
        $this->call(PartosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
        
        
    }
}

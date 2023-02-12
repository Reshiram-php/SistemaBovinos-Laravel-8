<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name'=>'animal.delete'])->assignRole($role1);
        Permission::create(['name'=>'peso.delete'])->assignRole($role1);
        Permission::create(['name'=>'ordeno.delete'])->assignRole($role1);
        Permission::create(['name'=>'listadoen.delete'])->assignRole($role1);
        Permission::create(['name'=>'enfermedades.delete'])->assignRole($role1);
        Permission::create(['name'=>'listadova.delete'])->assignRole($role1);
        Permission::create(['name'=>'vacunas.delete'])->assignRole($role1);


        Permission::create(['name'=>'muertes.index'])->assignRole($role1);
        Permission::create(['name'=>'muertes.create'])->assignRole($role1);
        Permission::create(['name'=>'muertes.edit'])->assignRole($role1);
        Permission::create(['name'=>'muertes.delete'])->assignRole($role1);
        Permission::create(['name'=>'muerte.individual'])->assignRole($role1);

        Permission::create(['name'=>'ventas.index'])->assignRole($role1);
        Permission::create(['name'=>'ventas.create'])->assignRole($role1);
        Permission::create(['name'=>'ventas.edit'])->assignRole($role1);
        Permission::create(['name'=>'ventas.delete'])->assignRole($role1);
        Permission::create(['name'=>'ventas.individual'])->assignRole($role1);

        Permission::create(['name'=>'clientes.index'])->assignRole($role1);
        Permission::create(['name'=>'clientes.create'])->assignRole($role1);
        Permission::create(['name'=>'clientes.edit'])->assignRole($role1);
        Permission::create(['name'=>'clientes.delete'])->assignRole($role1);

        Permission::create(['name'=>'usuarios.index'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.create'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.edit'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.delete'])->assignRole($role1);
    }
}

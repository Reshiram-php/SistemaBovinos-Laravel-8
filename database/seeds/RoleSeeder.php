<?php

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
        Permission::create(['name'=>'clientes.destroy'])->assignRole($role1);
        
        Permission::create(['name'=>'usuarios.index'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.create'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.edit'])->assignRole($role1);
        Permission::create(['name'=>'usuarios.delete'])->assignRole($role1);
    }
}

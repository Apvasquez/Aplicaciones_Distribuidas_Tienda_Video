<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesandPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Cliente']);
        Permission::create(['name' => 'admin.Crear.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.Editar.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.Eliminar.destroy'])->assignRole($role1);
        Permission::create(['name' => 'admin.Listar.list'])->syncRoles($role2,$role1);
        $role1->givePermissionTo(['admin.Crear.index','admin.Eliminar.destroy','admin.Editar.edit','admin.Listar.list']);
        $role2->givePermissionTo('admin.Listar.list');

    }
}

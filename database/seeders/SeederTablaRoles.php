<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederTablaRoles extends Seeder
{
    public function run()
    {
        $rol = Role::create(['name'=>'Administrador']);
        $rol->givePermissionTo(Permission::all());
    }
}

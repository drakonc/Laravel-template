<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre Dashboard
            'admin.home',

            //Operaciones sobre tabla roles
            'role.listar',
            'role.crear',
            'role.editar',
            'role.borrar',

            //Operacions sobre tabla usuarios
            'usuario.listar',
            'usuario.crear',
            'usuario.editar',
            'usuario.borrar'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}

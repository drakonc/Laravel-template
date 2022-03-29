<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederSuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create( [
            'nombres' =>'Jose Alfonso',
            'apellidos' => 'Castro Cantillo',
            'usuario' => 'jcastro',
            'email' => 'jcastro@gmail.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'estado' => true,
        ]);

        $usuario->assignRole('Administrador');
    }
}

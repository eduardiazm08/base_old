<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre'        => 'Eduardo Diaz',
            'email'         => 'eduardiazm@gmail.com',
            'estado'        => 1,
            'password'      => bcrypt('12345678'),

        ]);
        Rol::create([
            'nombre'        => 'Root',
            'slug'          => Str::slug('super admin', '-')
        ]);
       DB::table('roles_tiene_usuarios')->insert([
            'usuarios_id'   => 1,
            'roles_id'      => 1
       ]);
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biblioteca;
use App\Models\User;
use App\Models\Libro;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'name' => 'Lector',
        ]);

        DB::table('rols')->insert([
            'name' => 'Administrador',
        ]);

        DB::table('users')->insert([
            'name' => 'lector',
            'email'=> 'user@user.cl',
            'password' => 'user',
            'id_rol' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email'=> 'admin@admin.cl',
            'password' => 'admin',
            'id_rol' => 2,
        ]);
        User::factory(10)->create();
        Libro::factory(10)->create();
        Biblioteca::factory(1)->create();


    }
}

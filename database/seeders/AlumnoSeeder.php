<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Juan',
                'telefono' => '123123123',
                'edad' => 20,
                'password' => 'contrasena',
                'email' => 'a@gmail.com',
                'sexo' => 'hombre'
            ],
            [
                'nombre' => 'Fran',
                'telefono' => '12343623',
                'edad' => 10,
                'password' => 'contrasena',
                'email' => 'F@gmail.com',
                'sexo' => 'hombre'
            ]
        ]);
    }
}

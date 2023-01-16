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
        //Creamos los alumnos
        DB::table('alumnos')->insert([
            [
                'nombre' => 'Juan',
                'telefono' => '123123123',
                'edad' => 20,
                'password' => 'contrasena',
                'email' => 'a@gmail.com',
                'sexo' => 'hombre',
                'curso_id' => 1
            ],
            [
                'nombre' => 'Fran',
                'telefono' => '12343623',
                'edad' => 10,
                'password' => 'contrasena',
                'email' => 'F@gmail.com',
                'sexo' => 'hombre',
                'curso_id' => 1
            ],
            [
                'nombre' => 'Javi',
                'telefono' => '12399999',
                'edad' => 30,
                'password' => 'soydinitri',
                'email' => 'j@gmail.com',
                'sexo' => 'mujer',
                'curso_id' => 1
            ]
            //Para crear uno rapido
            /*
            "nombre" :  "Javi",
            "telefono" : "12399999",
            "edad" : 30,
            "password" : "soydinitri",
            "email" : "j@gmail.com",
            "sexo" : "mujer"
            */
        ]);
    }
}

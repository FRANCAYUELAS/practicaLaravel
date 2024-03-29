<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'nombre' => 'fran'
            ],
            [
                'nombre' => 'dfsa'
            ],
            [
                'nombre' => 'tercero'
            ],
            [
                'nombre' => 'cuarto'
            ],
            [
                'nombre' => 'quinto'
            ],
        ]);
    }
}

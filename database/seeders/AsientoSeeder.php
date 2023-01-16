<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asientos')->insert([
            [
                'numero' => 1,
                'alumno_id' => 1
            ],
            [
                'numero' => 2,
                'alumno_id' => 2
            ],
            [
                'numero' => 3,
                'alumno_id' => 3
            ]
        ]);
    }
}

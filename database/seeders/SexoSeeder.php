<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sexos')->insert([
            ['sex_desc' => 'Masculino', 'sex_abrev' => 'M'],
            ['sex_desc' => 'Femenino', 'sex_abrev' => 'F'],
            ['sex_desc' => 'Otro', 'sex_abrev' => 'O'],
        ]);

        echo "Sexos insertados correctamente.\n";
    }
}

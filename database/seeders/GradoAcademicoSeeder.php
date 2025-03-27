<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grado_academicos')->insert([
            ['grado_academico_desc' => 'ANALFAETO'],
            ['grado_academico_desc' => 'PRIMARIA'],
            ['grado_academico_desc' => 'SECUNDARIA'],
            ['grado_academico_desc' => 'SUPERIOR TECNICA'],
            ['grado_academico_desc' => 'SUPERIOR UNIVERSITARIA'],
        ]);

        echo "Grados academicos insertados correctamente.\n";
    }
}

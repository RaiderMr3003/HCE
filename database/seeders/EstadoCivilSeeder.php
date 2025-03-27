<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_civils')->insert([
            ['estado_civil_desc' => 'SOLTERO'],
            ['estado_civil_desc' => 'CASADO'],
            ['estado_civil_desc' => 'CONVIVIENTE'],
            ['estado_civil_desc' => 'DIVORCIADO'],
            ['estado_civil_desc' => 'VIUDO'],
        ]);

        echo "Estados civiles insertados correctamente.\n";
    }
}

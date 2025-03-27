<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('razas')->insert([
            ['raza_desc' => 'AFRO-AMERICANO'],
            ['raza_desc' => 'ASIATICO'],
            ['raza_desc' => 'CAUCASICO'],
            ['raza_desc' => 'MESTIZO'],
            ['raza_desc' => 'NATIVO'],
            ['raza_desc' => 'OTROS'],
        ]);

        echo "Razas insertadAs correctamente.\n";
    }
}

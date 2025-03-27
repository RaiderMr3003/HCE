<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('religions')->insert([
            ['religion_desc' => 'AGNOSTICO'],
            ['religion_desc' => 'BUDISTA'],
            ['religion_desc' => 'CATOLICO'],
            ['religion_desc' => 'CRISTIANO'],
            ['religion_desc' => 'JUDIA'],
            ['religion_desc' => 'MUSULMAN'],
            ['religion_desc' => 'TESTIGO DE JEHOVA'],
            ['religion_desc' => 'NINGUNA'],
            ['religion_desc' => 'OTROS'],
        ]);

        echo "Religiones insertadas correctamente.\n";
    }
}

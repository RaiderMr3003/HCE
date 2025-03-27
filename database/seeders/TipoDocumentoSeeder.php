<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documentos')->insert([
            ['doc_desc' => 'DNI'],
            ['doc_desc' => 'CARNET DE EXTRANJERIA'],
            ['doc_desc' => 'PASAPORTE'],
            ['doc_desc' => 'OTRO'],
        ]);

        echo "Tipos de documentos insertados correctamente.\n";
    }
}

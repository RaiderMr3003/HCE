<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            ['tp_documento' => 1, 'nro_documento' => '12345678', 'ap_paterno' => 'MERCADO', 'ap_materno' => 'RACCHUMÍ', 'nombres' => 'MÁXIMO', 'fecha_nacimiento' => '2003-08-30', 'lugar_nacimiento' => 'LA CALETA', 'estado_civil' => 1, 'grado_academico' => 4, 'sexo' => 1, 'ocupacion' => 'PROGRAMADOR', 'centro_laboral' => 'REMOTO', 'direccion' => 'SAN JUAN', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '987654321', 'email' => 'mr3003gean@gmail.com'],
        ]);

        echo "Personas insertadas correctamente.\n";
    }
}

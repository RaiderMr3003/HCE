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
            ['tp_documento' => 1, 'nro_documento' => '23456789', 'ap_paterno' => 'RAMÍREZ', 'ap_materno' => 'QUISPE', 'nombres' => 'JULIANA', 'fecha_nacimiento' => '2000-05-15', 'lugar_nacimiento' => 'CUSCO', 'estado_civil' => 1, 'grado_academico' => 4, 'sexo' => 2, 'ocupacion' => 'DISEÑADORA', 'centro_laboral' => 'OFICINA CENTRAL', 'direccion' => 'AV. PERÚ 456', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '998877665', 'email' => 'juliana.rq@gmail.com'],
            ['tp_documento' => 1, 'nro_documento' => '34567890', 'ap_paterno' => 'LOPEZ', 'ap_materno' => 'FERNÁNDEZ', 'nombres' => 'CARLOS', 'fecha_nacimiento' => '1998-11-12', 'lugar_nacimiento' => 'AREQUIPA', 'estado_civil' => 2, 'grado_academico' => 3, 'sexo' => 1, 'ocupacion' => 'INGENIERO', 'centro_laboral' => 'PLANTA SUR', 'direccion' => 'JR. LIMA 789', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '912345678', 'email' => 'carlos.lf@correo.com'],
            ['tp_documento' => 1, 'nro_documento' => '45678901', 'ap_paterno' => 'GUTIÉRREZ', 'ap_materno' => 'SOTO', 'nombres' => 'MARÍA FERNANDA', 'fecha_nacimiento' => '2002-02-20', 'lugar_nacimiento' => 'HUANCAYO', 'estado_civil' => 1, 'grado_academico' => 2, 'sexo' => 2, 'ocupacion' => 'ENFERMERA', 'centro_laboral' => 'HOSPITAL REGIONAL', 'direccion' => 'CALLE LOS PINOS 321', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '987112233', 'email' => 'mf.soto.gutierrez@gmail.com'],
            ['tp_documento' => 1, 'nro_documento' => '56789012', 'ap_paterno' => 'CASTILLO', 'ap_materno' => 'MENDOZA', 'nombres' => 'LUIS ANDRÉS', 'fecha_nacimiento' => '1995-09-09', 'lugar_nacimiento' => 'TUMBES', 'estado_civil' => 3, 'grado_academico' => 5, 'sexo' => 1, 'ocupacion' => 'DOCENTE', 'centro_laboral' => 'UNIVERSIDAD NACIONAL', 'direccion' => 'URB. LOS OLIVOS 102', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '911222333', 'email' => 'luis.castillo.mz@gmail.com'],
            ['tp_documento' => 1, 'nro_documento' => '67890123', 'ap_paterno' => 'ROJAS', 'ap_materno' => 'VILLALOBOS', 'nombres' => 'KARINA', 'fecha_nacimiento' => '1999-07-01', 'lugar_nacimiento' => 'PIURA', 'estado_civil' => 1, 'grado_academico' => 3, 'sexo' => 2, 'ocupacion' => 'ABOGADA', 'centro_laboral' => 'ESTUDIO JURÍDICO NORTE', 'direccion' => 'PSJE. AMAZONAS 88', 'distrito' => 224, 'raza' => 4, 'religion' => 3, 'telefono_celular' => '900111222', 'email' => 'karina.vr@hotmail.com'],
        ]);

        echo "Personas insertadas correctamente.\n";
    }
}

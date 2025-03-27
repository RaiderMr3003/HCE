<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UbigeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = database_path('seeders/ubigeos.csv');

        if (!File::exists($csvFile)) {
            echo "El archivo CSV no existe en database/seeders/";
            return;
        }

        $data = [];
        $handle = fopen($csvFile, "r");

        if ($handle !== false) {
            $headers = fgetcsv($handle, 1000, ";");

            $headers[0] = preg_replace('/\xEF\xBB\xBF/', '', $headers[0]);

            while (($row = fgetcsv($handle, 1000, ";")) !== false) {
                $rowData = array_combine($headers, $row);

                unset($rowData["id_ubigeo"]);

                $data[] = $rowData;
            }
            fclose($handle);
        }

        // Insertar los datos en la tabla 'ubigeos'
        DB::table('ubigeos')->insert($data);

        echo "Ubigeos insertados correctamente.\n";
    }
}

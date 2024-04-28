<?php

namespace Database\Seeders;

use App\Models\BlackOpsModel;
use Illuminate\Database\Seeder;

class BlackOpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filename = __DIR__ . '/data/BlackOps.csv';
        $handler = fopen($filename, 'r');

        $fila = 1;
        $contador = 0;
        $registros = [];

        while (($row = fgetcsv($handler, 10000, ';')) != false) {
            if ($fila == 1) {
                $fila++;
                continue;
            }

            $registros[] = [
                'nombre' => $row[0],
                'descripcion' => $row[1],
                'descripcion_general' => $row[2],
                'imagen' => $row[3]
            ];
            $contador++;

        }

        if ($contador > 0) {
            BlackOpsModel::insertOrIgnore($registros);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lugar;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lugares = [
            [
                'id' => '20018',
                'nombre' => 'Azpeitia',
                'latitud' => '43.19',
                'logitud' => '-2.27',
                'idProvincia' => '20',
            ],
            [
                'id' => '20029',
                'nombre' => 'Deba',
                'latitud' => '43.29',
                'logitud' => '-2.35',
                'idProvincia' => '20',
            ],
            [
                'id' => '20030',
                'nombre' => 'Eibar',
                'latitud' => '43.19',
                'logitud' => '-2.47',
                'idProvincia' => '20',
            ],
            [
                'id' => '20045',
                'nombre' => 'Irun',
                'latitud' => '43.34',
                'logitud' => '-1.79',
                'idProvincia' => '20',
            ],
            [
                'id' => '20069',
                'nombre' => 'Donostia/San Sebastián',
                'latitud' => '43.32',
                'logitud' => '-1.98',
                'idProvincia' => '20',
            ],
            [
                'id' => '20071',
                'nombre' => 'Tolosa',
                'latitud' => '43.14',
                'logitud' => '-2.07',
                'idProvincia' => '20',
            ],
            [
                'id' => '48017',
                'nombre' => 'Bermeo',
                'latitud' => '43.42',
                'logitud' => '-2.72',
                'idProvincia' => '48',
            ],
            [
                'id' => '48020',
                'nombre' => 'Bilbao',
                'latitud' => '43.26',
                'logitud' => '-2.92',
                'idProvincia' => '48',
            ]
        ];

        foreach ($lugares as $lugar) {
            Lugar::create($lugar);
        }
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinicias = [
            [
                'id' => '1',
                'nombre' => 'Araba/Álava'
            ],
            [
                'id' => '20',
                'nombre' => 'Guipuzkoa'
            ],
            [
                'id' => '48',
                'nombre' => 'Bizkaia'
            ]
        ];

        foreach ($provinicias as $provincia) {
            Provincia::create($provincia);
        }
    }
}

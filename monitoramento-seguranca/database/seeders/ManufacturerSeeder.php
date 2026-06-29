<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    public function run(): void
    {
        $fabricantes = [
            'Intelbras',
            'Hikvision',
            'Axis',
            'Bosch',
            'Dahua'
        ];

        foreach ($fabricantes as $fabricante) {

            Manufacturer::create([
                'uuid' => Str::uuid(),
                'nome' => $fabricante,
                'site' => null,
                'suporte' => null
            ]);

        }
    }
}
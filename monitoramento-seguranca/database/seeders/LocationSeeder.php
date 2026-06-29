<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locais = [
            ['Recepção', 'Bloco A', 'Térreo'],
            ['Estacionamento', 'Externo', '0'],
            ['Corredor A', 'Bloco A', '1'],
            ['Corredor B', 'Bloco B', '2'],
            ['Sala de Servidores', 'TI', '1'],
            ['Almoxarifado', 'Fundos', '0'],
            ['Portão Principal', 'Externo', '0'],
            ['Pátio', 'Externo', '0'],
            ['Depósito', 'Bloco C', '0'],
            ['Entrada Principal', 'Bloco A', 'Térreo']
        ];

        foreach ($locais as $local) {
            Location::create([
                'uuid' => Str::uuid(),
                'nome' => $local[0],
                'bloco' => $local[1],
                'andar' => $local[2],
                'descricao' => null
            ]);
        }
    }
}
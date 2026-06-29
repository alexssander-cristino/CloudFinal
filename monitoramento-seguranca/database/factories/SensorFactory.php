<?php

namespace Database\Factories;

use App\Models\Sensor;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class SensorFactory extends Factory
{
    protected $model = Sensor::class;

    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),

            'nome' => fake()->randomElement([
                'Sensor Entrada',
                'Sensor Corredor',
                'Sensor Depósito',
                'Sensor Recepção',
                'Sensor Sala Servidores',
            ]),

            'tipo' => fake()->randomElement([
                'movimento',
                'fumaca',
                'temperatura',
                'porta',
                'janela',
                'presenca',
                'vibracao',
            ]),

            'status' => fake()->randomElement([
                'online',
                'offline',
                'manutencao',
            ]),

            'bateria' => fake()->numberBetween(20, 100),

            'valor_atual' => fake()->randomFloat(2, 0, 100),

            'ultima_leitura' => now()->subMinutes(rand(1, 60)),

            'location_id' => Location::inRandomOrder()->value('id'),
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Camera;
use App\Models\Location;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CameraFactory extends Factory
{
    protected $model = Camera::class;

    public function definition(): array
    {
        return [

            'uuid' => fake()->uuid(),

            'nome' => fake()->randomElement([
                'Entrada Principal',
                'Recepção',
                'Estacionamento',
                'Corredor A',
                'Corredor B',
                'Depósito',
                'Sala de Servidores',
                'Portão Lateral',
                'Pátio',
                'Almoxarifado'
            ]),

            'descricao' => fake()->sentence(),

            'ip' => fake()->localIpv4(),

            'porta' => 554,

            'fabricante_id' => Manufacturer::inRandomOrder()->first()->id,

            'modelo' => fake()->randomElement([
                'VIP 1230',
                'DS-2CD1043',
                'NBE-4502',
                'IPC-HFW1230'
            ]),

            'serial' => strtoupper(fake()->bothify('SN########')),

            'mac_address' => fake()->macAddress(),

            'resolucao' => fake()->randomElement([
                '1280x720',
                '1920x1080',
                '2560x1440',
                '3840x2160'
            ]),

            'fps' => fake()->randomElement([
                15,
                25,
                30,
                60
            ]),

            'codec' => fake()->randomElement([
                'H264',
                'H265'
            ]),

            'status' => fake()->randomElement([
                'online',
                'offline',
                'manutencao'
            ]),

            'ultima_comunicacao' => now()->subMinutes(rand(1,30)),

            'location_id' => Location::inRandomOrder()->first()->id

        ];
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sensor;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sensor::factory()
            ->count(30)
            ->create();
    }
}
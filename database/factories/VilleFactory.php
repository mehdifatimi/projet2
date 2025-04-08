<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VilleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'region_id' => \App\Models\Region::factory(),
            'nom' => fake()->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 
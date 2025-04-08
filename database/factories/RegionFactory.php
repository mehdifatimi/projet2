<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => fake()->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 
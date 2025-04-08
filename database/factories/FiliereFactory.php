<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FiliereFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cdc_id' => \App\Models\CDC::factory(),
            'nom' => fake()->word(),
            'description' => fake()->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 
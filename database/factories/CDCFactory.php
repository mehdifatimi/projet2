<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CDCFactory extends Factory
{
    public function definition(): array
    {
        return [
            'drif_id' => \App\Models\DRIF::factory(),
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'email' => fake()->unique()->safeEmail(),
            'telephone' => fake()->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 
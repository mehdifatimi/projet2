<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'ville_id' => \App\Models\Ville::factory(),
            'filiere_id' => \App\Models\Filiere::factory(),
            'animateur_id' => \App\Models\Animateur::factory(),
            'date_debut' => fake()->dateTimeBetween('now', '+1 month'),
            'date_fin' => fake()->dateTimeBetween('+1 month', '+2 months'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
} 
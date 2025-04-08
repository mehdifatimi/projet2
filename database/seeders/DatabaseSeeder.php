<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegionSeeder::class,
            VilleSeeder::class,
            DRSeeder::class,
            DRIFSeeder::class,
            CDCSeeder::class,
            FiliereSeeder::class,
            AnimateurSeeder::class,
            FormationSeeder::class,
            ParticipantSeeder::class,
        ]);
    }
}

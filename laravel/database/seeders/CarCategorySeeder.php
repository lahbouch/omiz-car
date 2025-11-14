<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_categories')->insert([
            [
                'name' => 'Économique',
                'description' => 'Voitures compactes économiques, parfaites pour la ville',
                'daily_rate' => 250.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compacte',
                'description' => 'Voitures compactes confortables pour les déplacements en couple ou en famille',
                'daily_rate' => 350.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Berline',
                'description' => 'Voitures spacieuses pour les voyages en famille ou les déplacements professionnels',
                'daily_rate' => 500.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SUV',
                'description' => 'Véhicules utilitaires sport pour les aventures et les terrains difficiles',
                'daily_rate' => 700.00,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

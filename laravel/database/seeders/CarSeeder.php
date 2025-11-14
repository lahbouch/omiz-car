<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get category IDs
        $economiqueCategoryId = DB::table('car_categories')->where('name', 'Économique')->first()->id;
        $compacteCategoryId = DB::table('car_categories')->where('name', 'Compacte')->first()->id;
        $berlineCategoryId = DB::table('car_categories')->where('name', 'Berline')->first()->id;
        $suvCategoryId = DB::table('car_categories')->where('name', 'SUV')->first()->id;

        DB::table('cars')->insert([
            [
                'make' => 'Renault',
                'model' => 'Clio',
                'registration_number' => 'TNG-123A',
                'year' => 2022,
                'color' => 'Blanc',
                'category_id' => $economiqueCategoryId,
                'available' => true,
                'features' => 'Climatisation, Radio, Bluetooth',
                'daily_rate' => 250.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'make' => 'Peugeot',
                'model' => '208',
                'registration_number' => 'TNG-456B',
                'year' => 2021,
                'color' => 'Gris',
                'category_id' => $economiqueCategoryId,
                'available' => true,
                'features' => 'Climatisation, Radio, Bluetooth, Caméra de recul',
                'daily_rate' => 250.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'make' => 'Renault',
                'model' => 'Mégane',
                'registration_number' => 'TNG-789C',
                'year' => 2020,
                'color' => 'Noir',
                'category_id' => $compacteCategoryId,
                'available' => true,
                'features' => 'Climatisation, GPS, Bluetooth, Toit ouvrant',
                'daily_rate' => 350.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'make' => 'Peugeot',
                'model' => '308',
                'registration_number' => 'TNG-101D',
                'year' => 2021,
                'color' => 'Bleu',
                'category_id' => $compacteCategoryId,
                'available' => true,
                'features' => 'Climatisation, GPS, Bluetooth, Sièges chauffants',
                'daily_rate' => 350.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'make' => 'Renault',
                'model' => 'Talisman',
                'registration_number' => 'TNG-202E',
                'year' => 2020,
                'color' => 'Gris métallisé',
                'category_id' => $berlineCategoryId,
                'available' => true,
                'features' => 'Climatisation automatique, GPS, Bluetooth, Sièges en cuir, Toit ouvrant',
                'daily_rate' => 500.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'make' => 'Dacia',
                'model' => 'Duster',
                'registration_number' => 'TNG-303F',
                'year' => 2019,
                'color' => 'Blanc cassé',
                'category_id' => $suvCategoryId,
                'available' => true,
                'features' => 'Climatisation, GPS, Bluetooth, 4 roues motrices',
                'daily_rate' => 700.00,
                'image_path' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

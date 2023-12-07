<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            BrandSeeder::class,
            RatingSeeder::class,
            ReportedSeeder::class,
            ModelCar::class,
            PartnerSeeder::class,
            // SupportSeeder::class,
            ServiceSeeder::class,
            NewsSeeder::class,
            CarsSeeder::class,
            SavedCarSeeder::class,
        ]);
    }
}

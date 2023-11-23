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
        SavedCarSeeder::class,
        ServiceSeeder::class,
        UserSeeder::class,
        AdminSeeder::class,
        PartnerSeeder::class,
        SupportSeeder::class
      ]);
    }
}

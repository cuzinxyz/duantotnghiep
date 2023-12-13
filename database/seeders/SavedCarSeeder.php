<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SavedCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('saved_cars')->insert([
        [
          'user_id' => 1,
          'car_id' => 1,
        ],
        [
          'user_id' => 2,
          'car_id' => 2,
        ],
        [
          'user_id' => 3,
          'car_id' => 3,
        ],
      ]);
    }
}

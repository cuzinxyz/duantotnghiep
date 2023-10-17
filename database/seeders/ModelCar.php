<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ModelCar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('model_cars')->insert([
            [
              'brand_id' => 1,
              'model_name' => 'E-Class',
            ],
            [
              'brand_id' => 2,
              'model_name' => 'S-Class',
            ],
            [
                'brand_id' => 1,
                'model_name' => 'C-Class',
            ],
          ]);
    }
}

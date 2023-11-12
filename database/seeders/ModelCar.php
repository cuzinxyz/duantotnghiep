<?php

namespace Database\Seeders;

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
        'model_name' => 'C-Class',
      ],
      [
        'brand_id' => 1,
        'model_name' => 'E-Class',
      ],
      [
        'brand_id' => 1,
        'model_name' => 'S-Class',
      ],
      [
        'brand_id' => 2,
        'model_name' => '3-Series',
      ],
      [
        'brand_id' => 2,
        'model_name' => '5-Series',
      ],
      [
        'brand_id' => 2,
        'model_name' => '7-Series',
      ],
      [
        'brand_id' => 3,
        'model_name' => 'A4',
      ],
      [
        'brand_id' => 3,
        'model_name' => 'A6',
      ],
      [
        'brand_id' => 3,
        'model_name' => 'A8',
      ],
    ]);
  }
}

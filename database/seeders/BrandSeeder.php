<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('brands')->insert([
      [
        'brand_name' => 'Mercedes',
        'logo_url' => 'brand_image/mercedes.svg',
      ],
      [
        'brand_name' => 'BMW',
        'logo_url' => 'brand_image/bmw.png',
      ],
      [
        'brand_name' => 'Audi',
        'logo_url' => 'brand_image/audi.svg',
      ],
      [
        'brand_name' => 'Jeep',
        'logo_url' => 'brand_image/jeep.svg',
      ],
      [
        'brand_name' => 'Mazda',
        'logo_url' => 'brand_image/mazda.svg',
      ],
      [
        'brand_name' => 'Ferarri',
        'logo_url' => 'brand_image/ferarri.svg',
      ],
      [
        'brand_name' => 'Mitsubishi',
        'logo_url' => 'brand_image/mitsubishi.svg',
      ],
      [
        'brand_name' => 'Nissan',
        'logo_url' => 'brand_image/nissan.svg',
      ],
      # tiep tuc suzuki
      [
        'brand_name' => 'Suzuki',
        'logo_url' => 'brand_image/suzuki.svg',
      ],
      [
        'brand_name' => 'Tesla',
        'logo_url' => 'brand_image/tesla.svg',
      ],
      [
        'brand_name' => 'Toyota',
        'logo_url' => 'brand_image/toyota.svg',
      ],
      [
        'brand_name' => 'Volkswagen',
        'logo_url' => 'brand_image/volkswagen.svg',
      ],
    ]);
  }
}

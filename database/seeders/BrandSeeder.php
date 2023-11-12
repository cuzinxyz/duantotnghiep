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
        'brand_name' => 'Mercedes ',
        'logo_url' => 'brand_image/gjIjAyhNlegnqpXIFZaHGGufRXpTAE-metaTWVyY2VkZXMtQmVuei1Mb2dvLnBuZw==-.png',
      ],
      [
        'brand_name' => 'BMW ',
        'logo_url' => 'brand_image/d9hLKotyjOuiim6nPWgi8IWOBt7CQZ-metaQk1XLUxvZ28ucG5n-.png',
      ],
      [
        'brand_name' => 'Audi ',
        'logo_url' => 'brand_image/RSZc0MJuaH3ESrRoOW5o6WbRIMR5tp-metaQXVkaS1Mb2dvLnBuZw==-.png',
      ],
    ]);
  }
}

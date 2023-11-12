<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
          [
            'service_name' => 'Basic',
            'price' => 500000,
            'description' => '5 tin thường
            5 lượt đẩy tin',
            'expiration_date' => 10,
            'number_of_pushes' => 5,
            'title' => 'GÓI KINH TẾ',
          ],
          [
            'service_name' => 'Standard',
            'price' => 1500000,
            'description' => '5 tin thường
            8 tin vip
            150 lượt đẩy tin',
            'expiration_date' => 20,
            'number_of_pushes' => 150,
            'title' => 'GÓI CHUYÊN GIA',
          ],
          [
            'service_name' => 'VIP',
            'price' => 500000,
            'description' => '16 tin vip
            24 tin thường
            450 lượt đẩy tin',
            'expiration_date' => 30,
            'number_of_pushes' => 450,
            'title' => 'GÓI CAO CẤP',
          ],
        ]);
    }
}

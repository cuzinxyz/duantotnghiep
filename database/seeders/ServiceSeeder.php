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
            'service_name' => 'Gói Cơ Bản',
            'price' => 100000,
            'description' => '2 lượt đẩy tin',
            'expiration_date' => 30,
            'number_of_pushes' => 2,
            'title' => 'Giải pháp tiết kiệm cho Người bán lẻ.'
          ],
          [
            'service_name' => 'Gói Tiêu Chuẩn',
            'price' => 300000,
            'description' => '5 lượt đẩy tin',
            'expiration_date' => 30,
            'number_of_pushes' => 5,
            'title' => 'Giải pháp tối ưu cho Người bán nhỏ lẻ.',
          ],
          [
            'service_name' => 'Gói Chuyên Nghiệp',
            'price' => 500000,
            'description' => '10 lượt đẩy tin',
            'expiration_date' => 30,
            'number_of_pushes' => 10,
            'title' => 'Giải pháp tốt nhất dành cho doanh nghiệp / Garage',
          ],
          [
            'service_name' => "Gói tin lẻ: 1 tháng",
            'price' => 200000,
            'description' => "Đẩy tin lẻ duy trì trong 1 tháng, 1 lượt đẩy tin",
            'expiration_date' => 30,
            'number_of_pushes' => 1,
            'title' => NULL
          ],
          [
            'service_name' => "Gói tin lẻ: 7 ngày",
            'price' => 50000,
            'description' => "Đẩy tin lẻ duy trì trong 7 ngày, 1 lượt đẩy tin",
            'expiration_date' => 7,
            'number_of_pushes' => 1,
            'title' => NULL
          ],
          [
            'service_name' => "Gói tin lẻ: 15 ngày",
            'price' => 150000,
            'description' => "Đẩy tin lẻ duy trì trong 15 ngày, 1 lượt đẩy tin",
            'expiration_date' => 15,
            'number_of_pushes' => 1,
            'title' => NULL
          ]
        ]);
    }
}

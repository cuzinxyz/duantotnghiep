<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
                'service_name' => 'free',
                'price' => 0,
                'description' => json_encode('Đăng miễn phí 3 tin'),
                'expiration_date' => now()->addDays(30),
            ],
            [
                'service_name' => 'vip',
                'price' => 500000,
                'description' => json_encode('Đăng miễn phí 5 tin, đẩy tin lên top theo ngày'),
                'expiration_date' => now()->addDays(30),
            ],
            [
                'service_name' => 'vvip',
                'price' => 1000000,
                'description' => json_encode('Đăng miễn phí 5 tin, đẩy tin lên top theo giờ'),
                'expiration_date' => now()->addDays(30),
            ]
        ]);
    }
}

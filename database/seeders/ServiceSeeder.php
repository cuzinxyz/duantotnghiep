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
            'price' => 500,
            'title' => 'Giải pháp tiết kiệm cho Người bán nhỏ lẻ.',
            'description' => '["21 lượt Đẩy Tin cho mọi Tin đăng bán Xe","3 Tin Mới"]',
            'expiration_date' => Carbon::now()->addMonth()
          ],
          [
            'service_name' => 'Gói Tiêu Chuẩn',
            'price' => 1400,
            'title' => 'Giải pháp tối ưu cho Người bán nhỏ lẻ.',
            'description' => '["65 lượt Đẩy Tin cho mọi Tin đăng bán Xe","5 Tin Mới","Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc chi phí"]',
            'expiration_date' => Carbon::now()->addMonth()
          ],
          [
            'service_name' => 'Gói Chuyên Nghiệp',
            'price' => 2690,
            'title' => 'Giải pháp toàn diện cho Người bán chuyên.',
            'description' => '["128 lượt Đẩy Tin cho mọi Tin đăng bán Xe","8 Tin Mới","Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc chi phí","Hệ thống quản lí Khách hàng giúp ‘tiết lộ’ tất cả Khách hàng quan tâm đến Tin đăng"]',
            'expiration_date' => Carbon::now()->addMonth()
          ],
          [
            'service_name' => 'Gói Vip',
            'price' => 3750,
            'title' => 'Giải pháp toàn diện cho Người bán chuyên.',
            'description' => '["190 lượt Đẩy Tin cho mọi Tin đăng bán Xe","10 Tin Mới","Báo cáo hiệu quả tin đăng giúp tối ưu vượt bậc chi phí","Hệ thống quản lí Khách hàng giúp ‘tiết lộ’ tất cả Khách hàng quan tâm đến Tin đăng","Chat tự động giúp phản hồi Khách hàng nhanh chóng"]',
            'expiration_date' => Carbon::now()->addMonth()
          ]
        ]);
    }
}

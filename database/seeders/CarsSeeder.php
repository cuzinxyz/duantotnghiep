<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=10; $i++)
        {
            Car::create([
                'title' => 'Xe nay so '.$i.'',
                'slug' => 'xe-nay-so-'.$i.'',
                'price' => 900000000,
                'user_id' => 1,
                'brand_id' => $i,
                'model_car_id' => $i,
                'city_id' => $i,
                'district_id' => $i,
                'full_address' => 'Phuc Tho, Ha Noi',
                'recommended' => 0,
                'contact' => json_decode('{"name": "abnerdo", "email": "cuzin2k3@gmail.com", "phone": "0961472726", "city_id": '.$i.', "district_id": '.$i.', "full_address": "Phuc Tho, Ha Noi"}'),
                'car_info' => json_decode('{"color": "Đen", "engine": "1000", "mileage": "10000", "version": "two", "features": ["Bánh xe cao cấp", "Cửa sổ trời"], "fuelType": "Xăng", "transmission": "sotudong", "number_of_seats": "5", "year_of_manufacture": "2022"}'),
                'verhicle_image_library' => ['car_photos/detail_1.png','car_photos/detail_2.png','car_photos/detail_3.png'],
                'verhicle_videos' => 'video_car/1700227477_test_video.mp4',
                'status' => 0,
                'reason' => null,
                'description' => 'xe nay so '.$i.'\nxe nay so '.$i.'\nxe nay so '.$i.'\nxe nay so '.$i.'\nxe nay so '.$i.'\nxe nay so '.$i.'\n',
                'model_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]);
        }
    }
}

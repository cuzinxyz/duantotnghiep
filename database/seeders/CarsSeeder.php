<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\ModelCar;
use App\Models\User;
use Carbon\Carbon;
use Kjmtrue\VietnamZone\Models\District;
use Kjmtrue\VietnamZone\Models\Province;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentYear = date('Y');
        $startYear = $currentYear - 10;
        for ($i=1; $i<=10; $i++)
        {
            $userId = User::inRandomOrder()->first()->id;
            $brand = Brand::inRandomOrder()->first();
            $brandId = $brand->id;
            $brandName = $brand->brand_name;
            $modelCar = ModelCar::where('brand_id', $brandId)->first();
            $modelCarId = $modelCar->id;
            $modelName = $modelCar->model_name;
            $cityId = Province::inRandomOrder()->first()->id;
            $districtId = District::where('province_id', $cityId)->first()->id;
            $randomYear = mt_rand($startYear, $currentYear);
            $price = mt_rand(500000000, 1500000000);
            Car::create([
                'title' => 'Bán xe ' . $brandName . ' ' . $modelName . ' ' . $randomYear,
                'slug' => 'xe-nay-so-'.$i.'',
                'price' => $price,
                'user_id' => $userId,
                'brand_id' => $brandId,
                'model_car_id' => $modelCarId,
                'city_id' => $cityId,
                'district_id' => $districtId,
                'full_address' => 'Phuc Tho, Ha Noi',
                'recommended' => 0,
                'contact' => json_decode('{"name": "abnerdo", "email": "cuzin2k3@gmail.com", "phone": "0961472726", "city_id": '.$cityId.', "district_id": '.$districtId.', "full_address": "Phuc Tho, Ha Noi"}'),
                'car_info' => json_decode('{"color": "Đen", "engine": "1000", "mileage": "10000", "version": "two", "features": ["Bánh xe cao cấp", "Cửa sổ trời"], "fuelType": "Xăng", "transmission": "sotudong", "number_of_seats": "5", "year_of_manufacture": "2022"}'),
                'verhicle_image_library' => ['car_photos/detail_1.png','car_photos/detail_2.png','car_photos/detail_3.png'],
                'verhicle_videos' => 'video_car/1700227477_test_video.mp4',
                'garage_id' => '1',
                'status' => 1,
                'reason' => null,
                'description' => 'Bán xe ' . $brandName . ' ' . $modelName . ' ' . $randomYear,
                'model_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]);
        }
    }
}

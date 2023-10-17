<?php

namespace App\Filament\Resources\CarResource\Pages;

use App\Filament\Resources\CarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCar extends CreateRecord
{
    protected static string $resource = CarResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // $data['car_info'] = json_encode($data['car_info']);
        // var_dump($data['car_info']);
        $data['verhicle_image_library'] = json_encode($data['verhicle_image_library']);
        $contact = [
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'social' => [
                'facebook' => $data['facebook'],
                'twitter' => $data['twitter']
            ]
        ];
        $car_info = [
            'mileage' => $data['Mileage'],
            'engine' => $data['Engine'],
            'fuelType' => $data['Engine'],
            'condition' => $data['Condition'],
            'features' => $data['features'],
        ];
        $data['contact'] = json_encode($contact);
        $data['car_info'] = json_encode($car_info);
        // dd($data['contact']);
        // dd($data['car_info']);
        // $data['contact'] = json_encode(array_merge($data['email'], $data['phone_number']));
        // $data['car_info'] = json_encode(array_merge($data['Mileage'], $data['Engine'], $data['FuelType'], $data['Condition'], $data['features']));
        // print_r($data['car_info']);
        return $data;
    }
}

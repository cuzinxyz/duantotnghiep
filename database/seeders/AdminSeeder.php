<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'avatar' => 'avatars/admins/TU1HVHMHNeYSThDm2mbtsbh4lOodOv-metacGV4ZWxzLW96YW4tw6d1bGhhLTE3MDc4MDI4LmpwZw==-.jpg',
            ],
        ]);
    }
}

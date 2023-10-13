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
                'avatar' => 'avatars/QiZMDVQ7IRQhdL0I5bscxgI8FbJp2b-metacGV4ZWxzLXBob3RvLTE3MDc4MDU0LndlYnA=-.webp',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'avatar' => 'avatars/users/QiZMDVQ7IRQhdL0I5bscxgI8FbJp2b-metacGV4ZWxzLXBob3RvLTE3MDc4MDU0LndlYnA=-.webp',
                'account_balence' => '1230000',
                'service_id' => 1,
                'phone_number' => '0988123456',
            ],
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => Hash::make('12345678'),
                'avatar' => 'avatars/users/pDE8TRKeH0OH3t6Tn3Bqevue5ESKfq-metaS0guanBn-.jpg',
                'account_balence' => '234000',
                'service_id' => 2,
                'phone_number' => '0988123457'
            ],
            [
                'name' => 'BOT',
                'email' => 'bot@gmail.com',
                'password' => Hash::make('12345678'),
                'avatar' => 'avatars/bot.jpg',
                'account_balence' => 0,
                'service_id' => 0,
                'phone_number' => NULL
            ]
        ]);
    }
}

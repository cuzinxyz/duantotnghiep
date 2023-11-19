<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            [
                'name' => 'VinFast',
                'logo_url' => 'partners/8TCMJ1e7Had24EoqpMTRIeCgmXLYQU-metaZG93bmxvYWQucG5n-.png',
            ],
            [
                'name' => 'Škoda Auto',
                'logo_url' => 'partners/DXd9HgdBxFfGt64zuNx4Xk8uKu3u4b-metaZG93bmxvYWQgKDEpLnBuZw==-.png',
            ],
            [
                'name' => 'Car Toys',
                'logo_url' => 'partners/company-logo-01.png'
            ],
            [
                'name' => 'Be Car Care Aware',
                'logo_url' => 'partners/company-logo-02.png'
            ],
            [
                'name' => 'IR Club Car',
                'logo_url' => 'partners/company-logo-03.png'
            ],
            [
                'name' => 'WACKERLIN CAR',
                'logo_url' => 'partners/company-logo-04.png'
            ],
            [
                'name' => 'Enter Prise',
                'logo_url' => 'partners/company-logo-05.png'
            ],
            [
                'name' => 'Underfine',
                'logo_url' => 'partners/company-logo-06.png'
            ],
        ]);
    }
}

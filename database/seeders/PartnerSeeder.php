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
            ]
        ]);
    }
}

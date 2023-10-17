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
                'avatar' => 'partners/8TCMJ1e7Had24EoqpMTRIeCgmXLYQU-metaZG93bmxvYWQucG5n-.png',
            ],
            [
                'name' => 'Škoda Auto',
                'avatar' => 'partners/zR38QywOfCcynVpIqQ3A0vDRvOUftE-metaZG93bmxvYWQgKDEpLnBuZw==-.png',
            ]
        ]);
    }
}

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
                'logo_url' => 'avatars/users/pDE8TRKeH0OH3t6Tn3Bqevue5ESKfq-metaS0guanBn-.jpg',
            ]
        ]);
    }
}

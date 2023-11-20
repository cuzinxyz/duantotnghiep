<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Faker::class);

        for ($i = 0; $i < 5; $i++) {
            \App\Models\News::create([
                'title' => $faker->sentence,
                'slug' => Str::slug($faker->sentence),
                'content' => $faker->paragraph,
                'summary' => $faker->sentence,
                'thumbnailImage' => $faker->imageUrl(),
                'viewCount' => $faker->numberBetween(0, 1000),
                'shareCount' => $faker->numberBetween(0, 100),
                'isPublished' => 1,
            ]);
        }
    }
}

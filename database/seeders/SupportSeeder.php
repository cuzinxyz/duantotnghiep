<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supports')->insert([
            [
                'user_id' => 1,
                'title' => 'Title 1',
                'category' => 'Category 1',
                'body' => 'Body 1',
                'response' => 'bla bla bla',
                'status' => '0',
            ],
            [
                'user_id' => 1,
                'title' => 'Title 1',
                'category' => 'Category 1',
                'body' => 'Body 1',
                'response' => 'bla bla bla',
                'status' => '0',
            ],
            [
                'user_id' => 1,
                'title' => 'Title 2',
                'category' => 'Category 2',
                'body' => 'Body 2',
                'response' => 'bla bla bla',
                'status' => '0',
            ],
            [
                'user_id' => 1,
                'title' => 'Title 3',
                'category' => 'Category 3',
                'body' => 'Body 3',
                'response' => 'bla bla bla',
                'status' => '0',
            ],
            [
                'user_id' => 1,
                'title' => 'Title 4',
                'category' => 'Category 4',
                'body' => 'Body 4',
                'response' => 'bla bla bla',
                'status' => '0',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('movies')->insert([
        [
            'status' => 1,
            'name' => 'Space Force',
            'rating' => 6.9,
            'description' => '',
            'image' => 'movies-images/space-force.jpg',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'status' => 1,
            'name' => 'Forest Gump',
            'rating' => 8.8,
            'description' => '',
            'image' => 'movies-images/forest-gump.jpg',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'status' => 1,
            'name' => 'Joker',
            'rating' => 7.0,
            'description' => '',
            'image' => 'movies-images/joker.jpg',
            'created_at' => $now,
            'updated_at' => $now
        ]
    ]);
    }
}

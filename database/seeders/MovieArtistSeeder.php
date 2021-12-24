<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('movie_artist')->insert([
        [
            'movie_id' => 1,
            'artist_id' => 1,
        ],[
            'movie_id' => 2,
            'artist_id' => 1,
        ],[
            'movie_id' => 2,
            'artist_id' => 2,
        ],[
            'movie_id' => 2,
            'artist_id' => 3,
        ],[
            'movie_id' => 2,
            'artist_id' => 4,
        ],[
            'movie_id' => 2,
            'artist_id' => 5,
        ],[
            'movie_id' => 3,
            'artist_id' => 3,
        ],[
            'movie_id' => 3,
            'artist_id' => 4,
        ],[
            'movie_id' => 3,
            'artist_id' => 5,
        ]
    ]);
    }
}

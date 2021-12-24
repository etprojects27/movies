<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('artists')->insert([
        [
            'name' => 'Robert Zemeckis',
            'title' => 'director',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'name' => 'Winston Groom',
            'title' => 'writer',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'name' => 'Tom Hanks',
            'title' => 'star',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'name' => 'Robin Wright',
            'title' => 'star',
            'created_at' => $now,
            'updated_at' => $now
        ],[
            'name' => 'Gary Sinise',
            'title' => 'star',
            'created_at' => $now,
            'updated_at' => $now
        ]
    ]);
    }
}

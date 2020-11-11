<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['name' => 'Drama'],
            ['name' => 'Kids'],
            ['name' => 'TV Show']
        ];

        foreach($genres as $show) {
            Genre::create($show);
        }
    }
}

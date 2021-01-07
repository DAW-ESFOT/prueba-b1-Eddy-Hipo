<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Movie::truncate();
        $faker = \Faker\Factory::create();

        $genres = Genre::all();
        foreach ($genres as $genre) {
            for ($i = 0; $i < 2; $i++) {
                Movie::create([
                    'name' => $faker->word,
                    'code' => $faker->swiftBicNumber,
                    'year' => $faker->year,
                    'available' => true,
                    'genre_id' => $genre -> id,
                ]);
            }
        }
    }
}

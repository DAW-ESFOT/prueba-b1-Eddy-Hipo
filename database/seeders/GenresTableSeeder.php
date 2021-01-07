<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Genre::truncate();
        $faker = \Faker\Factory::create();
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 5; $i++) {
            Genre::create([
                'name' => $faker->word,
            ]);
        }
    }
}

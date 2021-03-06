<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(GenresTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}

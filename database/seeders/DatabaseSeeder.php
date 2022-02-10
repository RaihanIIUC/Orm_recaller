<?php

namespace Database\Seeders;

use App\Models\User_profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100000)->create();
        User_profile::factory(10000)->create();
        //  $this->call(CategorySeeder::class);
        // $this->call(MovieSeeder::class);
        // $this->call(RatingSeeder::class);
        // $this->call(PostSeeder::class);
    }
}

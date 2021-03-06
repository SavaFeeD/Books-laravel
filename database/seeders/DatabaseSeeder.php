<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(11)->create();
        \App\Models\Book::factory(16)->create();
        \App\Models\RequestBook::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Config;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Config::factory(1)->create();
        // \App\Models\User::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Config;
use App\Models\Banner;
use App\Models\Aboult;
use App\Models\Services;
use App\Models\Products;
use App\Models\User;

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
        Banner::factory(1)->create();
        Aboult::factory(1)->create();
        $this->call(ProjectsSeeder::class);
        Services::factory(1)->create();
        $this->call(ServiceComplementSeeder::class);
        Products::factory(5)->create();
        $this->call(ConfigSocialSeeder::class);
        $this->call(MetasSeeder::class);
        User::factory(1)->create();
    }
}

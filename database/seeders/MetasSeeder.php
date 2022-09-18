<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CofigMetas;

class MetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =  [
            ['property' => "og:locale", 'content' => 'pt_BR'],
            ['property' => "fb:app_id", 'content' => '648721179426893'],
            ['property' => "og:image:type", 'content' => 'image/jpeg'],
            ['property' => "og:image:width", 'content' => '800'],
            ['property' => "og:image:height", 'content' => '600'],
            ['property' => "robots", 'content' => 'index, follow'],
        ];

        foreach ($array as $value) {
            CofigMetas::create($value);
        }
    }
}

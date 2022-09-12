<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ConfigSocial;

class ConfigSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =  [
            ['name' => "Facebook", 'link' => '#', 'icon' => 'facebook.svg'],
            ['name' => "Instagram", 'link' => '#', 'icon' => 'instagram.svg'],
            ['name' => "Linkedin", 'link' => '#', 'icon' => 'linkedin.svg'],
            ['name' => "Discord", 'link' => '#', 'icon' => 'discord.svg'],
            ['name' => "Telegram", 'link' => '#', 'icon' => 'telegram.svg'],
            ['name' => "Whatsapp", 'link' => '#', 'icon' => 'whatsapp.svg'],
        ];

        foreach ($array as $value) {
            ConfigSocial::create($value);
        }
    }
}

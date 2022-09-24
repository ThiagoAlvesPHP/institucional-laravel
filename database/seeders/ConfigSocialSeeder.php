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
            [
                'name' => "Facebook",
                'link' => 'https://www.facebook.com/ltdeveloper/',
                'icon' => 'facebook.svg'
            ],
            [
                'name' => "Instagram",
                'link' => 'https://www.instagram.com/ltdeveloperweb/',
                'icon' => 'instagram.svg'
            ],
            [
                'name' => "Linkedin",
                'link' => 'https://www.linkedin.com/in/thiago-alves-b96b2159/',
                'icon' => 'linkedin.svg'
            ],
            [
                'name' => "Discord",
                'link' => '#',
                'icon' => 'discord.svg'
            ],
            [
                'name' => "Telegram",
                'link' => '#',
                'icon' => 'telegram.svg'
            ],
            [
                'name' => "Whatsapp",
                'link' => 'https://wa.me/message/2CZCBDNW4HZJG1',
                'icon' => 'whatsapp.svg'
            ],
        ];

        foreach ($array as $value) {
            ConfigSocial::create($value);
        }
    }
}

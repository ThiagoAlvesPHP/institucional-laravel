<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"              => "LT Developer",
            "email"             => "thiagoalves@ltdeveloper.com.br",
            "phone"             => "+55 (47) 99280-0841",
            "address_zipcode"   => "88359-002",
            "address"           => "Rua Botuverá",
            "address_number"    => "261",
            "address_district"  => "Dom Joaquim",
            "complement"        => "Apto.: 102",
            "city"              => 'Brusque',
            'state'             => 'SC',
            'country'           => "Brasil",
            "logo"              => "logo.webp",
            "logo_dark"         => "logo.png",
            "favicon"           => 'favicon.ico',
            'title'             => "Institucional",
            'text'              => "Atuando com desenvolvimento de sites, lojas virtuais, aplicativos e sistemas web criamos soluções customizadas para a necessidade da sua empresa",
            'keywords'          => 'institucional, web, desenvolvimento, programação, site, loja virtual, desenvolvimento web, programação web'
        ];
    }
}

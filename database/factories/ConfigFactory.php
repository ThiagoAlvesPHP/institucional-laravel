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
            "phone"             => "+55(73)99941-2514",
            "address_zipcode"   => "88359-002",
            "address"           => "Rua Botuverá",
            "address_number"    => "261",
            "address_district"  => "Dom Joaquim",
            "complement"        => "Apto.: 102",
            "city"              => 'Brusque',
            'state'             => 'SC',
            'country'           => "Brasil",
            'link_whatsapp'     => 'https://wa.me/message/2CZCBDNW4HZJG1',
            "logo"              => "logo.webp",
            "logo_dark"         => "logo.png",
            "favicon"           => 'favicon.ico',
            'title'             => "Criação de Sites - Agência de Desenvolvimento Web | LT Developer",
            'text'              => "Oferecemos serviços completos de desenvolvimento de sites, desde a criação de páginas web responsivas até o desenvolvimento de e-commerce e aplicativos web personalizados. Trabalhamos em estreita colaboração com você para entender suas necessidades específicas e desenvolver soluções sob medida para o seu negócio.",
            'keywords'          => 'Desenvolvimento de sites, Criação de sites, Desenvolvimento web, Criação de páginas web, Programação web, Web design, Desenvolvimento de sites responsivos
            , Desenvolvimento de e-commerce, Desenvolvimento de aplicativos web, Desenvolvimento de sites institucionais'
        ];
    }
}

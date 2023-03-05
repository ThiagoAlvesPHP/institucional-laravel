<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => 'LT Developer',
            'text'      => 'Você precisa de um site profissional e moderno para o seu negócio? Nós somos especialistas em desenvolvimento web e podemos ajudá-lo a criar a presença online que sua empresa merece. Com anos de experiência em criação de sites, programação web e web design, sabemos o que é preciso para criar um site que reflita a identidade da sua marca e atraia clientes em potencial.',
            'link'      => 'https://wa.me/message/2CZCBDNW4HZJG1',
            'link_text' => 'Clique Aqui',
            'image'     => 'banner.png'
        ];
    }
}

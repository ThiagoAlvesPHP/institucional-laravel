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
            'text'      => 'Leve a presença digital da sua empresa para um próximo nível! Do desenvolvimento à gestão e promoção de seu site, app ou e-commerce',
            'link'      => '#',
            'link_text' => 'Clique Aqui',
            'image'     => 'banner.png'
        ];
    }
}

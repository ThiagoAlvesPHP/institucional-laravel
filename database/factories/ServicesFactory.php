<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => 'Serviços',
            'text'      => 'Atuando com desenvolvimento de sites, lojas virtuais e sistemas web, criamos soluções customizadas para a necessidade da sua empresa.',
            'link'      => 'https://wa.me/message/2CZCBDNW4HZJG1',
            'link_text' => 'Marcar uma call',
            'link_icon' => 'fas fa-phone',
            'image'     => 'service.png'
        ];
    }
}

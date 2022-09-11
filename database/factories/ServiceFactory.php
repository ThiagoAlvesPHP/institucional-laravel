<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
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
            'text'      => 'Atuando com desenvolvimento de sites, lojas virtuais e aplicativos, criamos soluções customizadas para a necessidade da sua empresa.',
            'link'      => '#',
            'link_text' => 'Marcar uma call',
            'link_icon' => '<i class="fas fa-phone"></i>',
            'image'     => 'service.png'
        ];
    }
}

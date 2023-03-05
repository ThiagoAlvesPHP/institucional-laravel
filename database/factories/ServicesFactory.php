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
            'text'      => 'Oferecemos serviços completos de desenvolvimento de sites, desde a criação de páginas web responsivas até o desenvolvimento de e-commerce e aplicativos web personalizados. Trabalhamos em estreita colaboração com você para entender suas necessidades específicas e desenvolver soluções sob medida para o seu negócio. Não perca mais tempo com um site desatualizado ou de baixa qualidade. Entre em contato conosco hoje mesmo para saber como podemos ajudá-lo a obter um site de sucesso para o seu negócio.',
            'link'      => 'https://wa.me/message/2CZCBDNW4HZJG1',
            'link_text' => 'Marcar uma call',
            'link_icon' => 'fas fa-phone',
            'image'     => 'service.png'
        ];
    }
}

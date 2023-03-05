<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Sobre',
            'text' => '
            Você quer uma presença online que se destaque da concorrência? A LT Developer é uma empresa especializada em desenvolvimento web, criação de sites, programação, web design e muito mais. Com anos de experiência no mercado, a LT Developer sabe como desenvolver sites e aplicativos web que são não só visualmente atraentes, mas também eficazes em gerar resultados para o seu negócio. Nós nos esforçamos para oferecer soluções personalizadas para cada cliente, desde a criação de sites responsivos e desenvolvimento de e-commerce até a programação de sistemas webs e aplicativos personalizados. A equipe da LT Developer é composta por desenvolvedores experientes e apaixonados pelo que fazem, sempre se mantendo atualizados com as últimas tendências e tecnologias. Nossa missão é fornecer soluções de alta qualidade e ajudar nossos clientes a alcançar o sucesso online. Queremos que você saia daqui sabendo que fez a escolha certa, por isso, garantimos que cada projeto é entregue dentro do prazo e com a mais alta qualidade possível. Se você está procurando uma empresa de confiança para ajudar no desenvolvimento do seu site, aplicativo ou sistema web, então você está no lugar certo. Entre em contato conosco hoje mesmo e deixe a LT Developer levar o seu negócio para o próximo nível>
            ',
            'image' => 'aboult.png'
        ];
    }
}

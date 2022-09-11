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
            'text' => 'Somos uma agência de desenvolvimento de sites, blog, sistemas, portfólios e temos como objetivo desenvolver sites com as melhores tecnologias do mercado para deixar seu site mais rápido e mais intuitivo. Um desenvolvimento de qualidade é essencial tanto para acelerar os processos de seus ganhos, quanto organizar sua empresa. O desenvolvimento de um site vai ajudar com certeza a propagar sua marca de maneira mais eficiente. Nosso desenvolvimento foca em dar a melhor experiência tanto aos seus usuários quanto a você faça agora mesmo um orçamento e tenha o melhor custo beneficio na criação de seu site, tenha um site profissional e totalmente responsivo. Quer um site de qualidade? A LTDeveloper tem para você.',
            'image' => 'aboult.png'
        ];
    }
}

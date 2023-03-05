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
            'text' => 'Desenvolvimento web, criação de sites, programação, web design e muito mais. A LT Developer é a escolha certa para destacar a presença online do seu negócio. Oferecemos soluções personalizadas para cada cliente, desde sites responsivos até sistemas webs e aplicativos personalizados. Com uma equipe experiente e apaixonada, entregamos projetos dentro do prazo e com a mais alta qualidade possível. Deixe a LT Developer levar o seu negócio para o próximo nível. Entre em contato conosco hoje mesmo.',
            'image' => 'aboult.png'
        ];
    }
}

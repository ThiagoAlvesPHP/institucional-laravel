@extends('layout.app')

@section('content')
    @php
        $imgs = [
            "logo" => '<img src="assets/logo.webp" width="150" alt="Logo">',
            'favicon' => "assets/favicon.icon"
        ];
        $banner = [
            "image" => "assets/images/banner2.png",
            "text" => "Leve a presença digital da sua empresa para um próximo nível! Do desenvolvimento à gestão e promoção de seu site, app ou e-commerce",
            "title" => $imgs['logo'] ?? 'LT developer',
            "link" => "https://ltdeveloper.com.br/"
        ];
        $aboult = [
            "image" => "assets/images/aboult.png",
            "text" => "Somos uma agência de desenvolvimento de sites, blog, sistemas, portfólios e temos como objetivo desenvolver sites com as melhores tecnologias do mercado para deixar seu site mais rápido e mais intuitivo. Um desenvolvimento de qualidade é essencial tanto para acelerar os processos de seus ganhos, quanto organizar sua empresa. O desenvolvimento de um site vai ajudar com certeza a propagar sua marca de maneira mais eficiente. Nosso desenvolvimento foca em dar a melhor experiência tanto aos seus usuários quanto a você faça agora mesmo um orçamento e tenha o melhor custo beneficio na criação de seu site, tenha um site profissional e totalmente responsivo. Quer um site de qualidade? A LTDeveloper tem para você.",
            "title" => "Sobre",
        ];

        $customer = [
            'title' => 'Projetos entregues para empresas de todos os portes',
            'images' => [
                "assets/images/customers/alemaoflores.png",
                "assets/images/customers/asuasala.png",
                "assets/images/customers/blueseeds.png",
                "assets/images/customers/callnet.png",
                "assets/images/customers/conexaoativa.png",
                "assets/images/customers/madcity.png",
                "assets/images/customers/mega.png",
                "assets/images/customers/mercatapp.png",
                "assets/images/customers/paiol.png",
                "assets/images/customers/verderosa.png"
            ]
        ];
        $services = [
            'title' => 'Serviços',
            'text' => 'Atuando com desenvolvimento de sites, lojas virtuais e aplicativos, criamos soluções customizadas para a necessidade da sua empresa',
            'image' => 'assets/images/banner3.png',
            'icons' => [
                ['icon' => '<i class="fas fa-desktop"></i>', 'text' => 'Site Institucional'],
                ['icon' => '<i class="fas fa-store-alt"></i>', 'text' => 'E-commerce'],
                ['icon' => '<i class="fas fa-tachometer-alt"></i>', 'text' => 'Sistema Personalizado'],
            ],
            'link' => '#contact'
        ];

        $image = "assets/images/product.png";
        $products = [
            "title" => "Conheça nossos produtos!",
            "list" => [
                ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
                ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
                ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
                ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#']
            ]
        ];

        $footer = [
            [
                "logo" => "assets/images/logotipo.svg",
                'text' => 'A Olivas Digital é uma martech, desenvolve interfaces voltadas ao público interno e clientes; atua na integração de sistemas de maneira nativa ou automatizada e gestão.',
                "social" => [
                    [
                        'icon' => "assets/images/icons/linkedin.svg",
                        'title' => 'LinkedIn',
                        'link' => 'https://www.linkedin.com/in/thiago-alves-b96b2159/'
                    ],
                    [
                        'icon' => "assets/images/icons/facebook.svg",
                        'title' => 'Facebook',
                        'link' => 'https://www.facebook.com/devthiagoalves/'
                    ],
                    [
                        'icon' => "assets/images/icons/instagram.svg",
                        'title' => 'Instagram',
                        'link' => 'https://www.instagram.com/thiagoalvesdevphp/'
                    ],
                    [
                        'icon' => "assets/images/icons/whatsapp.svg",
                        'title' => 'Whatsapp',
                        'link' => 'https://api.whatsapp.com/send?phone=5573999412514&text=Eu%20preciso%20de%20um%20or%C3%A7amento'
                    ],
                ]
            ],
            [
                ""
            ]

        ];
    @endphp
    {{-- Banner --}}
    <x-banner :data=$banner />
    {{-- Aboult --}}
    <x-aboult :data=$aboult />
    {{-- Customers --}}
    <x-customers :data=$customer />
    {{-- Services --}}
    <x-services :data=$services />
    {{-- Products - Category --}}
    <x-products :data=$products />
    {{-- Contact --}}
    <x-contact />
@endsection

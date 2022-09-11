@extends('layout.app')

@section('content')
    @php
        // $image = "assets/images/product.png";
        // $products = [
        //     "title" => "Conheça nossos produtos!",
        //     "list" => [
        //         ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
        //         ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
        //         ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#'],
        //         ['image' => $image, 'title' => 'Produto'.rand(5, 15), 'link' => '#']
        //     ]
        // ];
    @endphp
    {{-- Banner --}}
    <x-banner :data=$banner />
    {{-- Aboult --}}
    <x-aboult :data=$aboult />
    {{-- Projects --}}
    <x-projects :data=$projects />
    {{-- Services --}}
    <x-services :data=$service />
    {{-- Products - Category --}}
    <x-products :data=$products />
    {{-- Contact --}}
    <x-contact />
@endsection

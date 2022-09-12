@extends('layout.app')

@section('content')
    {{-- Banner --}}
    <x-site.banner :data=$banner />
    {{-- Aboult --}}
    <x-site.aboult :data=$aboult />
    {{-- Projects --}}
    <x-site.projects :data=$projects />
    {{-- Services --}}
    <x-site.services :data=$service />
    {{-- Products - Category --}}
    <x-site.products :data=$products />
    {{-- Contact --}}
    <x-site.contact />
@endsection

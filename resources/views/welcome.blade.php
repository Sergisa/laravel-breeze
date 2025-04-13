@extends('layouts.main')

@section('main')
    <x-card img="5.jpg" id="card-1" class="first">
        <x-slot:title>Цены перестали быть колючими!</x-slot:title>
        <x-slot:date>30 марта 2021</x-slot:date>
        Ёжики со скидкой до 70%. Яблоко в подарок с каждым купленным ёжиком
    </x-card>
    <x-card img="1.jpg">
        <x-slot:title>Акита-ину</x-slot:title>
        <x-slot:date>1 сентября 2021</x-slot:date>
        Статья о самой известной в кинематографе собаке. Ссылка открывается не сразу - придётся подождать
        какое-то время.
    </x-card>
    <x-card img="2.jpg" action>
        <x-slot:title>Австралийский импорт</x-slot:title>
        <x-slot:date>30 марта 2021</x-slot:date>
        Лавровый лист в одни руки. Абсолютно бесплатно!!! Товар будет доставлен в сумке нашим курьером в
        кратчайшие сроки.
    </x-card>
    <x-card link="#" img="4.jpg">
        <x-slot:title>Выставка художников кубистов</x-slot:title>
        <x-slot:date>30 марта 2021</x-slot:date>
        На выставке вы сможете ощутить на себе всю депрессивность параллелепипедов и познать все
        эмоциональные тонкости Октаэдра.
    </x-card>
@endsection

@section('scripts')
    @stack('scripts')
@endsection

@extends('layouts.app')

@section('title', 'Игорь Нафранович | Разработчик web-приложений')

@section('content')
    {{-- Подключение всех секций главной страницы --}}
    @include('sections.hero')
    @include('sections.about')
    @include('sections.skills')
    @include('sections.projects')
    @include('sections.contact')
@endsection
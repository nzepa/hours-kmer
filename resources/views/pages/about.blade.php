<!--extends c'est pour que cette page hérite des propriétés de yields('app')-->
@extends('app')

@section('title', 'A propos | ' . config('app.name'))



{{-- Cette section permet de définir le contenu de @yields('content') avec ce qui est contenu entre ses balises --}}
@section('content')
    <img src="{{ asset('/img/portrait.png') }}" alt="Profil de ZPA" class="my-12 rounded-full shadow-md">
    <h2 class="text-gray-700 mb-5">Réalisé avec le <span class="text-pink-500">&hearts;</span> par ZPA.</h2>
    <p><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('home') }}">Revenir a l'accueil</a></p>
@endsection
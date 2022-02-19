
<!--extends c'est pour que cette page hérite des propriétés de yields('app')-->
@extends('app')

{{-- Cette section ira récupérer le contenu de yields('title') permettant de définir le titre de la page --}}
@section('title', 'Hello City App')



{{-- Cette section permet de définir le contenu de @yields('content') avec ce qui est contenu entre ses balises --}}
@section('content')
    <img class="rounded shadow-md h-32 mt-12" src="{{ asset('/img/cmr.png') }}" alt="Logo du drapeau du Cameroun">
    <h1 class="text-3xl sm:text-5xl text-indigo-600 font-semibold mt-3">Hello from Cameroun !</h1>
    <p class="text-gray-800 text-lg">Il est {{date("H:i A")}} actuellement au Cameroun</p>
@endsection
    

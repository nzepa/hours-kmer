
<!--extends c'est pour que cette page hérite des propriétés de yields('app')-->
@extends('app')

{{-- Cette section ira récupérer le contenu de yields('title') permettant de définir le titre de la page --}}
@section('title', 'Hello City App')

<img src="{{ asset('/img/cmr.png') }}" alt="Logo du Cameroun">

{{-- Cette section permet de définir le contenu de @yields('content') avec ce qui est contenu entre ses balises --}}
@section('content')
    <h1>Hello from Cameroun !</h1>
    <p class="description">Il est {{date("H:i A")}} actuellement au Cameroun</p>
@endsection
    

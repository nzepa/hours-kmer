<!--extends c'est pour que cette page hérite des propriétés de yields('app')-->
@extends('app')

@section('title', 'A propos | Hello city App')


{{-- Cette section permet de définir le contenu de @yields('content') avec ce qui est contenu entre ses balises --}}
@section('content')
    <p>Réalisé avec le &hearts; par ZPA.</p>
    <p><a href="/">Revenir a l'accueil</a></p>
@endsection
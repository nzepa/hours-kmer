<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Contenu par défaut')</title>
    <!-- Styles -->
</head>

<body>
    <!--contenu qui doit changer de page en page ceci est comme un gabarit-->

    {{-- Ceci permet de définir un contenu qui pourra changer en fonction des pages --}}
    @yield('content')

    <footer>
        <p>&copy; Copyright {{date("Y")}} &middot; <a href="/about-us">A propos</a></p>
    </footer>
</body>



</html>
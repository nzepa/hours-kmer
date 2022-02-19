<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col justify-between min-h-screen items-center py-6">
    <!--contenu qui doit changer de page en page ceci est comme un gabarit-->

    {{-- Ceci permet de définir un contenu qui pourra changer en fonction des pages --}}
    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>

    <footer class="text-gray-400">
        <p>&copy; Copyright {{date("Y")}}
        @if (! Route::is('about'))
            &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('about') }}">A propos</a>
        @endif</p>
    </footer>
</body>

</html>
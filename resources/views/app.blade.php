<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello city</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <!-- Styles -->

</head>

<body>
    <!--contenu qui doit changer de page en page ceci est comme un gabarit-->
    @yield('content')
    <footer>
        <p>&copy; Copyright {{date("Y")}} &middot; <a href="/about-us">A propos</a></p>
    </footer>
</body>



</html>
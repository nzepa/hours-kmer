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
    <h1>Hello from Cameroun !</h1>

    <p class="description">Il est {{date("h:i A")}} actuellement au Cameroun</p>
</body>

<footer>
    <p>&copy; Copyright {{date("Y")}} &middot; <a href="/about-us">A propos</a></p>
</footer>

</html>
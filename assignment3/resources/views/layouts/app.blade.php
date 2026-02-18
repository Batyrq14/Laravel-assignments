<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal About Page built with Laravel Blade">

    <title>@yield('title', 'Hero')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>
            Hero
        </h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Hero</p>
        @yield('footer-extra')
    </footer>

</body>
</html>
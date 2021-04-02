<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Windjammers France</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @stack('metas')
</head>

<body class="antialiased">
    @include('parts.navbar')
    <main class="min-h-screen font-body">
        @yield('content')
    </main>
    @include('parts.footer')
</body>
</html>
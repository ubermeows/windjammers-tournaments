<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metas')
    <title>@yield('title') | Windjammers France</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="antialiased">
    @include('parts.navbar', ['isHome' => request()->routeIs('show')])
    <main class="min-h-screen font-body">
        @yield('content')
    </main>
    @include('parts.footer')
</body>

</html>
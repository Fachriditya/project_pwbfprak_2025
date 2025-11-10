<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Login RSHP')</title>

        <link rel="stylesheet" href="{{ asset('css/user pages/login-styles.css') }}">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    <div id="app">
        <main class="py-0"> 
            @yield('content')
        </main>
    </div>
</body>
</html>
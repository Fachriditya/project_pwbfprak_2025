<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RSHP UNAIR')</title>
    <link rel="stylesheet" href="{{ asset('css/main pages/components/main-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main pages/site/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main pages/site/kontak.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main pages/site/layanan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main pages/site/tentang-kami.css') }}">
</head>
<body>
    <x-main-menu />
    <main>
        @yield('content')
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IQ Media')</title>
    
    <!-- Bootstrap CSS từ Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles')
</head>
<body>
    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
    @stack('scripts')
</body>
</html>
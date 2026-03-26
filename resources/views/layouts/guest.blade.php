<!DOCTYPE html>
<html class="light" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'sisplanner - Login')</title>
    
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Vite CSS -->
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>
<body class="bg-[#f0f4f3] text-[#1e2323] font-body flex items-center justify-center min-h-screen selection:bg-[#006565] selection:text-white">
    
    @yield('content')
    
    <!-- Vite JavaScript -->
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>
</html>

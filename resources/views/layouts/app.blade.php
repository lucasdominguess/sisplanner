<!DOCTYPE html>
<html class="light" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'sisplanner')</title>
    
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Vite CSS -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background text-on-background font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- Desktop Sidebar Navigation -->
    <x-sidebar />
    
    <!-- Main Content Canvas -->
    <main class="md:ml-64 min-h-screen p-6 md:p-12">
        @yield('content')
    </main>
    
    <!-- Mobile Bottom Navigation -->
    <x-mobile-nav />
    
    <!-- Vite JavaScript -->
    @vite(['resources/js/app.js'])
</body>
</html>

<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Página Principal')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    @include('layouts.navbar') <!-- Incluir el navbar -->
    
    <div class="flex flex-grow">
        @include('layouts.sidebar') <!-- Incluir el sidebar -->

        <div class="flex-grow p-6">
            <h1>Dashboard</h1>
            @yield('content') <!-- Contenido principal -->
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        
            const toggleButton = document.getElementById("toggleSidebar");
            const sidebar = document.getElementById("sidebar");
    
            toggleButton.addEventListener("click", function() {
                if (sidebar) { // Verificar si el sidebar existe
                    sidebar.classList.toggle("hidden"); // Alterna la clase 'hidden'
                }
            });
        });
    </script>    
</body>
</html>


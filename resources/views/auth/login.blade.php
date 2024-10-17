<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Predial</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Component -->
    <div class="flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="https://images.squarespace-cdn.com/content/v1/5b80256a25bf0202e059a9d3/1650991999225-T4JW3P8VCO3H5033UZOY/AdobeStock_345175733.jpeg" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <div class="mt-6 text-amber-900 text-center">
                <img src="{{ asset('assets/images/logo-temixco.png') }}" alt="logo" width="150", height="150" class="mx-auto"><br>
                <h1 class="text-2xl font-semibold mb-4">Inicio de Sesión</h1>
            </div>
            <form action="{{ route('src.index') }}" data-url="{{ route('src.index') }}" method="POST">
                @csrf
                <!-- Usuario Input -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">person</span>
                    <input type="text" id="usuario" name="usuario" 
                           class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800" 
                           placeholder="Usuario" 
                           autocomplete="off">
                </div>
                <!-- Contraseña Input -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">lock</span>
                    <input type="password" id="contraseña" name="contraseña" 
                           class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800" 
                           placeholder="Contraseña" 
                           autocomplete="off">
                </div>
                <!-- Remember Me Checkbox -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="text-amber-800">
                    <label for="remember" class="text-black ml-2">Recordar Contraseña</label>
                </div>
                <!-- Forgot Password Link -->
                <div class="mb-6 text-blue-500">
                    <a href="#" class="hover:underline">¿Olvidaste la contraseña?</a>
                </div>
                <!-- Login Button -->
                <button type="submit" class="bg-green-800 hover:bg-green-600 text-white font-semibold rounded-md py-2 px-4 w-full">Iniciar Sesión</button>
            </form>
            <!-- Sign up  Link -->
            <div class="mt-6 text-amber-800 text-center">
                <a href="#" class="hover:underline">¿Eres nuevo? Registrate</a>
            </div>
        </div>
    </div>
</body>
</html>
<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        /* ... estilos ... */
    </style>
</head>

<body>
    @include('layouts.navbar') <!-- Incluir el navbar -->

    <div class="flex flex-grow">
        @include('layouts.sidebar') <!-- Incluir el sidebar -->

        <div class="flex-grow p-6">
            @section('title', 'Cambiar Contraseña')

            <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-center mb-4">Cambiar Contraseña</h2>

                @if (session('success'))
                    <div class="bg-green-200 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('cambiar_contrasena') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="currentPassword" class="block text-sm font-medium text-gray-700">Contraseña
                            Actual:</label>
                        <input type="password" id="currentPassword" name="currentPassword"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="newPassword" class="block text-sm font-medium text-gray-700">Nueva
                            Contraseña:</label>
                        <input type="password" id="newPassword" name="newPassword"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="newPassword_confirmation" class="block text-sm font-medium text-gray-700">Confirmar
                            Nueva Contraseña:</label>
                        <input type="password" id="newPassword_confirmation" name="newPassword_confirmation"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600  py-2 rounded-md shadow hover:bg-blue-700 transition duration-200">
                        Cambiar Contraseña
                    </button>

                </form>
            </div>


            @section('content')
            @endsection

        </div>
    </div>

    <script>
        // ... scripts ...
    </script>
</body>

</html>

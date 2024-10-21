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
            <img src="https://images.squarespace-cdn.com/content/v1/5b80256a25bf0202e059a9d3/1650991999225-T4JW3P8VCO3H5033UZOY/AdobeStock_345175733.jpeg"
                alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <div class="mt-6 text-amber-900 text-center">
                <img src="{{ asset('assets/images/Logo_ayala.png') }}" alt="logo" width="750" height="650"
                    class="mx-auto"><br>
                <h1 class="text-2xl font-semibold mb-4">Registro de Usuario</h1>
            </div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Usuario Input -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">person</span>
                    <input type="text" id="name" name="name"
                        class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800"
                        placeholder="Usuario" autocomplete="off">
                </div>

                <!-- Email Input -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">email</span>
                    <input type="text" id="email" name="email"
                        class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800"
                        placeholder="Correo" autocomplete="off">
                </div>


                <!-- Contraseña Input -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">lock</span>
                    <input type="password" id="password" name="password"
                        class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800"
                        placeholder="Contraseña" autocomplete="off">
                </div>

                <!-- Rol Select -->
                <div class="mb-4 flex items-center border border-amber-800 rounded-md">
                    <span class="material-icons text-amber-800 p-2">supervisor_account</span>
                    <!-- Puedes agregar un ícono si lo deseas -->
                    <select id="role_id" name="role_id" required
                        class="w-full border-none rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-amber-800">
                        <option value="">Seleccione un rol</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <div class="text-red-600">{{ $message }}</div>
                        <!-- Añade una clase para mostrar errores en rojo -->
                    @enderror
                </div>



                <!-- Login Button -->
                <button type="submit"
                    class="bg-green-800 hover:bg-green-600 text-white font-semibold rounded-md py-2 px-4 w-full">Registrar
                    Usuario</button>
            </form>
            <!-- Sign up Link -->
            <div class="mt-6 text-amber-800 text-center">
                <a href="{{ route('src.index') }}" class="hover:underline">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>
</body>

</html>

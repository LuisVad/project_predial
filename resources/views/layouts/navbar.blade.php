<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Página Principal')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </style>
</head>
<body>
    <nav
        class="relative flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-amber-800 lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <img src="{{ asset('assets/images/logo-temixco.png') }}" alt="logo" width="80", height="80"><br>
            <div class="ms-5 flex w-[30%] items-center justify-between bg-white">
                <input
                    type="search"
                    class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none motion-reduce:transition-none dark:border-white/10 dark:bg-body-dark dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill"
                    placeholder="Buscar"
                    aria-label="Search"
                    aria-describedby="button-addon2" />

                <!--Search icon-->
                <span class="material-icons text-amber-800 p-2">search</span>
            </div>
        </div>
    </nav>

    <div class="flex flex-grow">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div class="flex-grow p-6">
            <!-- Main content -->
            @yield('content')
        </div>
    </div>
</body>
</html>
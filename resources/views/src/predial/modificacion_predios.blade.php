<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Modificación Predios')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    @include('layouts.navbar') <!-- Incluir el navbar -->
    
    <div class="flex flex-grow">
        @include('layouts.sidebar') <!-- Incluir el sidebar -->

        <div class="flex-grow p-6">
            <div class="card">
                <h1><strong>Consulta de Predios</strong></h1>
                <label for="claveCatastral">Clave Catastral:</label>
                <input type="text" id="claveCatastral" placeholder="Ingrese la clave catastral">
                <button class="button">Buscar por</button>
                <button class="button">Nueva Clave</button>
        
                <ul class="nav">
                    <li><a href="#" onclick="showDiv('datosGenerales')">Datos Generales</a></li>
                    <li><a href="#" onclick="showDiv('superficies')">Superficies</a></li>
                    <li><a href="#" onclick="showDiv('colindancias')">Colindancias</a></li>
                    <li><a href="#" onclick="showDiv('construcciones')">Construcciones</a></li>
                    <li><a href="#" onclick="showDiv('difs')">DIFS y Coprops</a></li>
                    <li><a href="#" onclick="showDiv('avaluos')">Avaluos</a></li>
                    <li><a href="#" onclick="showDiv('movimientos')">Movimientos</a></li>
                    <li><a href="#" onclick="showDiv('documentos')">Documentos</a></li>
                    <li><a href="#" onclick="showDiv('documentosFiscales')">Documentos Fiscales</a></li>
                </ul>
        
                <div id="datosGenerales" class="cards">
                    <h2>Datos Generales</h2>
                    <p>Contenido sobre datos generales del predio...</p>
                </div>
                <div id="superficies" class="cards">
                    <h2>Superficies</h2>
                    <p>Contenido sobre superficies del predio...</p>
                </div>
                <div id="colindancias" class="cards">
                    <h2>Colindancias</h2>
                    <p>Contenido sobre colindancias del predio...</p>
                </div>
                <div id="construcciones" class="cards">
                    <h2>Construcciones</h2>
                    <p>Contenido sobre construcciones del predio...</p>
                </div>
                <div id="difs" class="cards">
                    <h2>DIFS</h2>
                    <p>Contenido sobre DIFS del predio...</p>
                </div>
                <div id="coprops" class="cards">
                    <h2>Coprops</h2>
                    <p>Contenido sobre coprops del predio...</p>
                </div>
                <div id="avaluos" class="cards">
                    <h2>Avaluos</h2>
                    <p>Contenido sobre avaluos del predio...</p>
                </div>
                <div id="movimientos" class="cards">
                    <h2>Movimientos</h2>
                    <p>Contenido sobre movimientos del predio...</p>
                </div>
                <div id="documentos" class="cards">
                    <h2>Documentos</h2>
                    <p>Contenido sobre documentos del predio...</p>
                </div>
                <div id="documentosFiscales" class="cards">
                    <h2>Documentos Fiscales</h2>
                    <p>Contenido sobre documentos fiscales del predio...</p>
                </div>
                
            </div>
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

        function showDiv(divId) {
            // Oculta todos los divs
            const cards = document.querySelectorAll('.cards');
            cards.forEach(card => {
                card.classList.remove('active'); // Remueve la clase active
                card.style.display = 'none'; // Asegúrate de ocultar el div
            });

            // Muestra el div seleccionado
            const selectedDiv = document.getElementById(divId);
            if (selectedDiv) {
                selectedDiv.classList.add('active'); // Añade la clase active
                selectedDiv.style.display = 'block'; // Muestra el div

                // // Mueve el div seleccionado al principio
                // selectedDiv.parentNode.insertBefore(selectedDiv, selectedDiv.parentNode.firstChild);
            }
        }
    </script>
</body>
</html>


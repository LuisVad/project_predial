<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Reportes Rezagos')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }

            .card {
                background: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin: 20px 0;

            }

            .cards {
                background: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin: 20px 0;
                display: none;
                /* Oculta todos los divs por defecto */

            }

            .cards.active {
                display: block;
                /* Muestra el div activo */
            }

            .card h2 {
                margin-top: 0;
            }

            .button {
                background-color: #4a5568;
                color: white;
                border: none;
                border-radius: 4px;
                padding: 10px 15px;
                cursor: pointer;
                margin-right: 10px;
            }

            .button:hover {
                background-color: #2d3748;
            }

            .nav {
                list-style-type: none;
                padding: 0;
                margin: 20px 0;
                display: flex;
                flex-wrap: wrap;
            }

            .nav li {
                margin-right: 15px;
            }

            .nav a {
                text-decoration: none;
                color: #4a5568;
                padding: 10px 15px;
                border-radius: 4px;
            }

            .nav a:hover {
                background-color: #edf2f7;
            }
    </style>
</head>
<body>
    @include('layouts.navbar') <!-- Incluir el navbar -->
    
    <div class="flex flex-grow">
        @include('layouts.sidebar') <!-- Incluir el sidebar -->

        <div class="flex-grow p-6">
            <div class="card" style="max-width: 500px; height: 700px;margin: auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-size: 30px"><strong>Reporte de Rezagos</strong></h2>
                
                    <div class="form-group" style="display: flex; align-items: center; margin-top: 20px;margin-bottom: 20px;">
                        <input type="checkbox" id="actualizarAdeudos" class="form-control" style="width: 25px; height: 20px;">
                        <label for="actualizarAdeudos" style="margin-right: 10px;">Actualizar Adeudos de Predial:</label>
                    </div>
                
                <div class="avance" style="margin-top: 20px;margin-bottom: 20px;">
                    <h1 style="margin-bottom: 20px;"><strong>Avance</strong></h1>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <div class="form-group">
                            <label style="margin-bottom: 20px;"><strong>Tipo de Reporte</strong></label><br>
                            <div style="margin-top: 20px">
                                <input type="radio" id="reporteDetalle" name="tipoReporte" value="detalle">
                                <label for="reporteDetalle">Reporte a Detalle</label>
                            </div>
                            <div>
                                <input type="radio" id="agrupadoLocalidad" name="tipoReporte" value="agrupado_localidad">
                                <label for="agrupadoLocalidad">Agrupado por Localidad</label>
                            </div>
                            <div>
                                <input type="radio" id="agrupadoColonia" name="tipoReporte" value="agrupado_colonia">
                                <label for="agrupadoColonia">Agrupado por Colonia</label>
                            </div>
                            <div>
                                <input type="radio" id="agrupadoZonaCatastral" name="tipoReporte" value="agrupado_zona_catastral">
                                <label for="agrupadoZonaCatastral">Agrupado por Zona Catastral</label>
                            </div>
                            <div>
                                <input type="radio" id="detalleColonia" name="tipoReporte" value="detalle_colonia">
                                <label for="detalleColonia">Detalle de Colonia</label>
                            </div>
                            <div>
                                <input type="radio" id="detalleZona" name="tipoReporte" value="detalle_zona">
                                <label for="detalleZona">Detalle de Zona Catastral</label>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="colonia">Colonia:</label>
                        <input type="text" id="colonia" class="form-control" placeholder="Ingrese la colonia">
                    </div>
                    
                    <div class="form-group">
                        <label for="zona">Zona:</label>
                        <input type="text" id="zona" class="form-control" placeholder="Ingrese la zona">
                    </div>
                </div>
                
                <div class="buttons" style="margin-top: 20px;  justify-content: space-between;">
                    <button class="btn" style="background-color: green; color: white; padding: 10px 15px; border: none; border-radius: 5px;">Imprimir</button>
                    <button class="btn" style="background-color: red; color: white; padding: 10px 15px; border: none; border-radius: 5px;">Exportar</button>
                    <button class="btn" style="background-color: yellow; color: black; padding: 10px 15px; border: none; border-radius: 5px;">Terminar</button>
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
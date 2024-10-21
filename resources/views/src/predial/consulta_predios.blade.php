<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Consulta Predios')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .button {
            background-color: #710634;
            /* Color principal */
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        .button:hover {
            background-color: #500425;
            /* Tonalidad más oscura para hover */
        }

        .nav li {
            display: inline-block;
            margin-right: 15px;
        }

        .nav li a {
            color: #710634;
            text-decoration: none;
            font-weight: bold;
        }

        .nav li a:hover {
            text-decoration: underline;
        }

        .cards {
            display: none;
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cards.active {
            display: block;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1,
        h2 {
            color: #710634;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('layouts.navbar') <!-- Incluir el navbar -->

    <div class="flex flex-grow">
        @include('layouts.sidebar') <!-- Incluir el sidebar -->

        <div class="flex-grow p-6">
            <!-- Aquí va contenido de la pantalla -->
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
                    <label for="claveCatastralGen">Clave Catastral:</label>
                    <input type="text" id="claveCatastralGen" placeholder="Clave Catastral">

                    <label for="claveAnterior">Clave Anterior:</label>
                    <input type="text" id="claveAnterior" placeholder="Clave Anterior">

                    <label for="claveNormalizada">Clave Normalizada:</label>
                    <input type="text" id="claveNormalizada" placeholder="Clave Normalizada">

                    <label for="tipoPredio">Tipo de Predio:</label>
                    <input type="text" id="tipoPredio" placeholder="Tipo de Predio">

                    <label for="cuentaPredial">Cuenta Predial:</label>
                    <input type="text" id="cuentaPredial" placeholder="Cuenta Predial">

                    <div id="ubicacionPredio" class="card">
                        <h2>Ubicación del Predio</h2>
                        <label for="direccionCompleta">Dirección Completa:</label>
                        <input type="text" id="direccionCompleta" placeholder="Dirección Completa">

                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" placeholder="Estado">

                        <label for="municipio">Municipio:</label>
                        <input type="text" id="municipio" placeholder="Municipio">

                        <label for="localidad">Localidad:</label>
                        <input type="text" id="localidad" placeholder="Localidad">

                        <label for="calle">Calle:</label>
                        <input type="text" id="calle" placeholder="Calle">

                        <label for="numeroExterior">No. Exterior:</label>
                        <input type="text" id="numeroExterior" placeholder="No. Exterior">

                        <label for="edificio">Edificio:</label>
                        <input type="text" id="edificio" placeholder="Edificio">

                        <label for="nivel">Nivel:</label>
                        <input type="text" id="nivel" placeholder="Nivel">

                        <label for="numeroInterior">No. Interior:</label>
                        <input type="text" id="numeroInterior" placeholder="No. Interior">

                        <label for="colonia">Colonia:</label>
                        <input type="text" id="colonia" placeholder="Colonia">

                        <label for="codigoPostal">CP:</label>
                        <input type="text" id="codigoPostal" placeholder="Código Postal">

                        <label for="denominacion">Denominación:</label>
                        <input type="text" id="denominacion" placeholder="Denominación">
                    </div>

                    <div id="datosContribuyente" class="card">
                        <h2>Datos del Contribuyente</h2>
                        <label for="idContribuyente">ID:</label>
                        <input type="text" id="idContribuyente" placeholder="ID">

                        <label for="tipoPersona">Tipo de Persona:</label>
                        <select id="tipoPersona">
                            <option value="fisica">Persona Física</option>
                            <option value="moral">Persona Moral</option>
                            <option value="gobierno">Gobierno</option>
                            <option value="otro">Otro</option>
                        </select>

                        <div id="datosPersona">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" placeholder="Nombre">

                            <label for="apellidoPaterno">Apellido Paterno:</label>
                            <input type="text" id="apellidoPaterno" placeholder="Apellido Paterno">

                            <label for="apellidoMaterno">Apellido Materno:</label>
                            <input type="text" id="apellidoMaterno" placeholder="Apellido Materno">
                        </div>

                        <div id="razonSocial">
                            <label for="razonSocialInput">Razón Social:</label>
                            <input type="text" id="razonSocialInput" placeholder="Razón Social">
                        </div>
                    </div>
                </div>

                <!-- Superficies -->
                <div id="superficies" class="cards">
                    <h2>Superficies</h2>
                    <label for="superficieTotal">Superficie Total:</label>
                    <input type="text" id="superficieTotal" placeholder="Superficie Total">

                    <label for="superficieConstruida">Superficie Construida:</label>
                    <input type="text" id="superficieConstruida" placeholder="Superficie Construida">

                    <label for="superficieTerreno">Superficie del Terreno:</label>
                    <input type="text" id="superficieTerreno" placeholder="Superficie del Terreno">
                </div>

                <!-- Colindancias -->
                <div id="colindancias" class="cards">
                    <h2>Colindancias</h2>
                    <label for="colindanteNorte">Colindante Norte:</label>
                    <input type="text" id="colindanteNorte" placeholder="Colindante Norte">

                    <label for="colindanteSur">Colindante Sur:</label>
                    <input type="text" id="colindanteSur" placeholder="Colindante Sur">

                    <label for="colindanteEste">Colindante Este:</label>
                    <input type="text" id="colindanteEste" placeholder="Colindante Este">

                    <label for="colindanteOeste">Colindante Oeste:</label>
                    <input type="text" id="colindanteOeste" placeholder="Colindante Oeste">
                </div>

                <!-- Construcciones -->
                <div id="construcciones" class="cards">
                    <h2>Construcciones</h2>
                    <label for="tipoConstruccion">Tipo de Construcción:</label>
                    <input type="text" id="tipoConstruccion" placeholder="Tipo de Construcción">

                    <label for="anioConstruccion">Año de Construcción:</label>
                    <input type="text" id="anioConstruccion" placeholder="Año de Construcción">

                    <label for="numNiveles">Número de Niveles:</label>
                    <input type="text" id="numNiveles" placeholder="Número de Niveles">
                </div>

                <!-- DIFS y Coprops -->
                <div id="difs" class="cards">
                    <h2>DIFS</h2>
                    <p>Contenido sobre DIFS del predio...</p>
                </div>

                <div id="coprops" class="cards">
                    <h2>Coprops</h2>
                    <p>Contenido sobre coprops del predio...</p>
                </div>

                <!-- Avaluos -->
                <div id="avaluos" class="cards">
                    <h2>Avaluos</h2>
                    <label for="avaluoFiscal">Avalúo Fiscal:</label>
                    <input type="text" id="avaluoFiscal" placeholder="Avalúo Fiscal">

                    <label for="avaluoComercial">Avalúo Comercial:</label>
                    <input type="text" id="avaluoComercial" placeholder="Avalúo Comercial">
                </div>

                <!-- Movimientos -->
                <div id="movimientos" class="cards">
                    <h2>Movimientos</h2>
                    <p>Contenido sobre movimientos del predio...</p>
                </div>

                <!-- Documentos -->
                <div id="documentos" class="cards">
                    <h2>Documentos</h2>
                    <p>Contenido sobre documentos del predio...</p>
                </div>

                <!-- Documentos Fiscales -->
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
                card.classList.remove('active');
                card.style.display = 'none';
            });

            // Muestra el div seleccionado
            const selectedDiv = document.getElementById(divId);
            if (selectedDiv) {
                selectedDiv.classList.add('active');
                selectedDiv.style.display = 'block';
            }
        }
    </script>
</body>

</html>
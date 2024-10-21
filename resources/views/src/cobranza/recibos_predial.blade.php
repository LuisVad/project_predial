<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Recibo Predial')</title>
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
                    <li><a href="#" onclick="showDiv('diferencias')">Diferencias</a></li>
                    <li><a href="#" onclick="showDiv('avaluos')">Avaluos</a></li>
                    <li><a href="#" onclick="showDiv('condonaciones')">Condonaciones</a></li>
                    <li><a href="#" onclick="showDiv('movimientos')">Movimientos</a></li>
                    <li><a href="#" onclick="showDiv('recibos')">Recibos</a></li>
                </ul>
    
                <div id="datosGenerales" class="cards" style="max-width: 1800px; max-height: auto; overflow: auto;">
                    <h2>Datos Generales</h2>
                    <label for="claveCatastral">Clave Catastral:</label>
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
    
    
    
                <div id="superficies" class="cards">
                    <h2>Superficies</h2>
                    <p>Contenido sobre superficies del predio...</p>
                </div>
    
                <div id="diferencias" class="cards">
                    <h2>Diferencias</h2>
    
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px;">No.</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Tipo</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Diferencia Bimestral</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bimestral Inicial</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bimestral Final</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bimestral Inicial</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bimestral Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">Ejemplo Tipo</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">100</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">200</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">300</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">400</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                            </tr>
                            <!-- Puedes añadir más filas aquí -->
                        </tbody>
                    </table>
                </div>
    
                <div id="avaluos" class="cards">
                    <h2>Avaluos</h2>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px;">No.</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Fecha</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Bimestre</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Sup. Terre</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Sup. Cons</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Valor Terreno</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Valor Construccion</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Valor Catrastral</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Base Gravable</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Crédito Fiscal</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Impuesto Bim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">20204/10/18</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">100</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">200</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">300</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">400</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">500</td>
                            </tr>
                            <!-- Puedes añadir más filas aquí -->
                        </tbody>
                    </table>
                </div>
    
                <div id="condonaciones" class="cards">
                    <h2>Condonaciones</h2>
                    <h2><strong>Aplicacion de Accesorios</strong></h2>
                    <div class="form-group" style="display: flex; align-items: center; margin-top: 20px;">
                        <input type="checkbox" id="actualizarAdeudos" class="form-control"
                            style="width: 25px; height: 20px;">
                        <label for="actualizarAdeudos" style="margin-right: 10px;">Aplicar Gastos de Ejecución?</label>
                    </div>
                    <div>
                        <input type="checkbox" id="actualizarAdeudos" class="form-control"
                            style="width: 25px; height: 20px;">
                        <label for="actualizarAdeudos" style="margin-right: 10px;">Aplicar Gastos de Embargo?</label>
                    </div>
                    <div style="margin-bottom: 20px">
                        <input type="checkbox" id="actualizarAdeudos" class="form-control"
                            style="width: 25px; height: 20px;">
                        <label for="actualizarAdeudos" style="margin-right: 10px;">Aplicar Multas?</label>
                    </div>
    
                    <h2><strong>Condonaciones por Aplicar</strong></h2>
                </div>
    
                <div id="movimientos" class="cards">
                    <h2>Movimientos</h2>
                    <p>Contenido sobre movimientos del predio...</p>
                </div>
                <div id="recibos" class="cards">
                    <h2>Recibos</h2>
    
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px;">Número</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Fecha</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Tipo</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Concepto</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Del</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Al</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Base Grav.</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">2023-10-01</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">Concepto Ejemplo</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">2022</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">2023</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">1000.00</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">1100.00</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                            </tr>
                            <!-- Puedes añadir más filas aquí -->
                        </tbody>
                    </table>
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
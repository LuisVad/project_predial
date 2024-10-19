<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Desplegable</title>
    <style>
        .subsubmenu {
            display: none;
            /* Ocultar submenús por defecto */
        }

        .active {
            display: block;
            /* Mostrar submenús cuando están activos */
        }

        .menu {
            list-style-type: none;
            padding: 0;
        }

        .p-2 {
            padding: 0.5rem;
            /* Espaciado para los elementos */
        }

        .hover\:bg-gray-700:hover {
            background-color: #4a5568;
            /* Color de fondo al pasar el ratón */
        }

        .hover\:bg-gray-600:hover {
            background-color: #fbfbfb;
            /* Color de fondo para sub-submenús */
            color: rgb(198, 198, 198);
            /* Color del texto */
            font-weight: bold;
            /* Poner el texto en negritas */
            text-anchor: 10px;
            /* Esta propiedad no es válida en CSS */
        }

        .hover\:bg-gray-500:hover {
            background-color: #fbfbfb;
            /* Color de fondo para sub-submenús */
            color: rgb(198, 198, 198);
            /* Color del texto */
            font-weight: bold;
            /* Poner el texto en negritas */
            text-anchor: 10px;
            /* Esta propiedad no es válida en CSS */
        }

        .w-64 {
            width: 16rem;
            /* Ancho del menú */
        }

        .h-screen {
            height: 100vh;
            /* Altura del menú */
        }

        .bg-gray-800 {
            background-color: #3b79e6;
            /* Color de fondo del menú */
        }

        .text-white {
            color: rgb(248, 248, 248);
            /* Color del texto */
            font-weight: bold;
            /* Poner el texto en negritas */
            text-anchor: 10px;
            /* Esta propiedad no es válida en CSS */
        }
    </style>
</head>

<body>
    <div class="w-64 h-screen bg-gray-800 text-white">
        <ul class="menu">
                <ul class="submenu">
                    <li class="p-2 hover:bg-gray-600" onclick="toggleSubmenu(event)">Padrón
                        <ul class="subsubmenu">
                            <li class="p-2 hover:bg-gray-500"><a href="{{ route('consulta_predios') }}">Consulta de Predios</a></li>
                            <li class="p-2 hover:bg-gray-500"><a href="{{ route('modificacion_predios') }}">Modificación de Predios</a></li>
                        </ul>
                    </li>
                </ul>

            <li class="p-2 hover:bg-gray-700" onclick="toggleCobranza(event)">Cobranza
                <ul class="subsubmenu">
                    <li class="p-2 hover:bg-gray-500"><a href="{{ route('recibos_predial') }}">Recibos de Predial</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Recibos de Convenios</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Póliza de Dependencias</a></li>
                </ul>
            </li>

            <li class="p-2 hover:bg-gray-700" onclick="toggleGestion(event)">Gestión
                <ul class="subsubmenu">
                    <li class="p-2 hover:bg-gray-500"><a href="#">Generación de Padrones</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Estados de Cuenta</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Constancia de No Adeudo</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="{{ route('rezagos') }}">Reportes de Rezagos</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Descuentos y Condonaciones</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Convenios</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Documentos fiscales</a></li>
                </ul>
            </li>

            <li class="p-2 hover:bg-gray-700" onclick="toggleAnalisis(event)">Análisis
                <ul class="subsubmenu">
                    <li class="p-2 hover:bg-gray-500"><a href="#">Análisis Global</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Análisis por Zona</a></li>
                    <li class="p-2 hover:bg-gray-500"><a href="#">Análisis Todas las Zonas</a></li>
                </ul>
            </li>

            <li class="p-2 hover:bg-gray-700">Utilerías</li>
        </ul>
    </div>

    <script>
        function togglePredial(event) {
            event.stopPropagation(); // Evitar que el evento se propague
            const submenu = event.currentTarget.querySelector('.subsubmenu');
            submenu.classList.toggle('active'); // Alternar clase 'active'
        }

        function toggleSubmenu(event) {
            event.stopPropagation(); // Evitar que el evento se propague
            const submenu = event.currentTarget.querySelector('.subsubmenu');

            if (submenu) {
                submenu.classList.toggle('active'); // Alternar clase 'active'
            }
        }

        function toggleCobranza(event) {
            event.stopPropagation(); // Evitar que el evento se propague
            const submenu = event.currentTarget.querySelector('.subsubmenu');
            submenu.classList.toggle('active'); // Alternar clase 'active'
        }

        function toggleGestion(event) {
            event.stopPropagation(); // Evitar que el evento se propague
            const submenu = event.currentTarget.querySelector('.subsubmenu');
            submenu.classList.toggle('active'); // Alternar clase 'active'
        }

        function toggleAnalisis(event) {
            event.stopPropagation(); // Evitar que el evento se propague
            const submenu = event.currentTarget.querySelector('.subsubmenu');
            submenu.classList.toggle('active'); // Alternar clase 'active'
        }
    </script>
</body>

</html>

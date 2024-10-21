<!-- resources/views/layouts/sidebar.blade.php -->
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
    }

    .hover\:bg-gray-700:hover {
        background-color: #4a5568;
    }

    .hover\:bg-gray-600:hover {
        background-color: #fbfbfb;
        color: rgb(198, 198, 198);
        font-weight: bold;
    }

    .hover\:bg-gray-500:hover {
        background-color: #fbfbfb;
        color: rgb(198, 198, 198);
        font-weight: bold;
    }

    .w-64 {
        width: 16rem;
    }

    .h-screen {
        height: 100vh;
    }

    .bg-gray-800 {
        background-color: #3b79e6;
    }

    .text-white {
        color: rgb(248, 248, 248);
        font-weight: bold;
    }
</style>

<aside id="sidebar" class="w-64 h-screen text-white bg-[#710634]">
    <nav class="flex flex-col">
        <!-- Item Padrón -->
        <div class="group">
            <button class="w-full text-left p-3 hover:bg-opacity-80 flex justify-between items-center text-xs"
                onclick="toggleMenu('padronSubmenu', this)"
                aria-expanded="{{ request()->routeIs('consulta_predios') || request()->routeIs('modificacion_predios') ? 'true' : 'false' }}"
                aria-controls="padronSubmenu">
                <i class="fas fa-home mr-2"></i> Padrón
                <svg class="w-4 h-4 transform transition-transform duration-200 {{ request()->routeIs('consulta_predios') || request()->routeIs('modificacion_predios') ? 'rotate-180' : '' }}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="padronSubmenu"
                class="flex-col bg-opacity-80 bg-[#b25a91] {{ request()->routeIs('consulta_predios') || request()->routeIs('modificacion_predios') ? '' : 'hidden' }}">
                <li>
                    <a href="{{ route('consulta_predios') }}"
                        class="block p-3 hover:bg-opacity-70 text-xs {{ request()->routeIs('consulta_predios') ? 'bg-[#c973a3] font-bold' : '' }}">
                        Consulta de Predios
                    </a>
                </li>
                <li>
                    <a href="{{ route('modificacion_predios') }}"
                        class="block p-3 hover:bg-opacity-70 text-xs {{ request()->routeIs('modificacion_predios') ? 'bg-[#c973a3] font-bold' : '' }}">
                        Modificación de Predios
                    </a>
                </li>
            </ul>
        </div>

        <!-- Item Cobranza -->
        <div class="group">
            <button class="w-full text-left p-3 hover:bg-opacity-80 flex justify-between items-center text-xs"
                onclick="toggleMenu('cobranzaSubmenu', this)"
                aria-expanded="{{ request()->routeIs('recibos_predial') ? 'true' : 'false' }}"
                aria-controls="cobranzaSubmenu">
                <i class="fas fa-file-invoice-dollar mr-2"></i> Cobranza
                <svg class="w-4 h-4 transform transition-transform duration-200 {{ request()->routeIs('recibos_predial') ? 'rotate-180' : '' }}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="cobranzaSubmenu"
                class="flex-col bg-opacity-80 bg-[#b25a91] {{ request()->routeIs('recibos_predial') ? '' : 'hidden' }}">
                <li>
                    <a href="{{ route('recibos_predial') }}"
                        class="block p-3 hover:bg-opacity-70 text-xs {{ request()->routeIs('recibos_predial') ? 'bg-[#c973a3] font-bold' : '' }}">
                        Recibos de Predial
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Recibos de Convenios</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Póliza de Dependencias</a>
                </li>
            </ul>
        </div>

        <!-- Item Gestión -->
        <div class="group">
            <button class="w-full text-left p-3 hover:bg-opacity-80 flex justify-between items-center text-xs"
                onclick="toggleMenu('gestionSubmenu', this)"
                aria-expanded="{{ request()->routeIs('rezagos') ? 'true' : 'false' }}" aria-controls="gestionSubmenu">
                <i class="fas fa-tasks mr-2"></i> Gestión
                <svg class="w-4 h-4 transform transition-transform duration-200 {{ request()->routeIs('rezagos') ? 'rotate-180' : '' }}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="gestionSubmenu" class="flex-col bg-opacity-80 bg-[#b25a91] {{ request()->routeIs('rezagos') ? '' : 'hidden' }}">
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Generación de Padrones</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Estados de Cuenta</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Constancia de No Adeudo</a>
                </li>
                <li>
                    <a href="{{ route('rezagos') }}"
                        class="block p-3 hover:bg-opacity-70 text-xs {{ request()->routeIs('rezagos') ? 'bg-[#c973a3] font-bold' : '' }}">
                        Reportes de Rezagos
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Descuentos y Condonaciones</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Convenios</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Documentos fiscales</a>
                </li>
            </ul>
        </div>

        <!-- Item Análisis -->
        <div class="group">
            <button class="w-full text-left p-3 hover:bg-opacity-80 flex justify-between items-center text-xs"
                onclick="toggleMenu('analisisSubmenu', this)"
                aria-expanded="{{ request()->routeIs('analisis_global') ? 'true' : 'false' }}"
                aria-controls="analisisSubmenu">
                <i class="fas fa-chart-bar mr-2"></i> Análisis
                <svg class="w-4 h-4 transform transition-transform duration-200 {{ request()->routeIs('analisis_global') ? 'rotate-180' : '' }}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="analisisSubmenu"
                class="flex-col bg-opacity-80 bg-[#b25a91] {{ request()->routeIs('analisis_global') ? '' : 'hidden' }}">
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Análisis Global</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Análisis por Zona</a>
                </li>
                <li>
                    <a href="#" class="block p-3 hover:bg-opacity-70 text-xs">Análisis Todas las Zonas</a>
                </li>
            </ul>
        </div>

        <!-- Item Utilerías -->
        <div class="p-3 hover:bg-opacity-80 text-xs">
            <i class="fas fa-cogs mr-2"></i> Utilerías
        </div>
    </nav>
</aside>

<script>
    function toggleMenu(submenuId, button) {
        const submenu = document.getElementById(submenuId);
        submenu.classList.toggle('hidden');

        // Rotar el ícono del botón
        const svgIcon = button.querySelector('svg');
        svgIcon.classList.toggle('rotate-180');
    }
</script>

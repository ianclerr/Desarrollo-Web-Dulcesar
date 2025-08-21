{{-- Sidebar móvil mejorado --}}
<style>
    .font-display { 
        font-family: 'Arial Black', Arial, sans-serif; 
        font-weight: normal;
    }
    .font-body { 
        font-family: Arial, sans-serif; 
    }
    
    /* Animación suave para los enlaces */
    .nav-link {
        position: relative;
        overflow: hidden;
    }
    
    .nav-link::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(to bottom, #ea580c, #f97316);
        transform: scaleY(0);
        transition: transform 0.3s ease;
        border-radius: 0 2px 2px 0;
    }
    
    .nav-link:hover::before {
        transform: scaleY(1);
    }

    /* Estilos para el divisor */
    .sidebar-divider {
        height: 1px;
        background: linear-gradient(to right, rgba(234, 88, 12, 0.1), rgba(249, 115, 22, 0.1));
        margin: 1rem 0;
    }
</style>

<div id="mobile-sidebar" class="fixed inset-0 z-50 lg:hidden hidden">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="sidebar-overlay"></div>
    <div class="relative w-80 max-w-sm h-full bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out" id="sidebar-panel">
        
        {{-- Header del sidebar --}}
        <div class="flex items-center justify-between p-6 border-b border-gray-100 bg-gradient-to-r from-orange-50 to-white">
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <img src="{{asset('images/logos/logo_rojo.png')}}" 
                         alt="DulCesar" 
                         class="w-14 h-14 object-contain hover:scale-110 transition-transform duration-300 drop-shadow-lg rounded-lg bg-white p-1 border border-orange-100">
                    <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-orange-500 rounded-full border-2 border-white"></div>
                </div>
                <h2 class="font-display text-xl font-bold text-orange-600 tracking-wide">Menú</h2>
            </div>
            <button id="close-sidebar-btn" class="p-2 rounded-xl hover:bg-orange-100 transition-all duration-200 hover:rotate-90 transform">
                <svg class="w-6 h-6 text-gray-600 hover:text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- Sección de búsqueda --}}
        <div class="p-4">
            <div class="relative">
                <input type="text" 
                       placeholder="Buscar productos..." 
                       class="w-full px-4 py-2 pl-10 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
        
        {{-- Navegación Principal --}}
        <nav class="p-4">
            <div class="mb-6">
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-2">Navegación</h3>
                <div class="space-y-1">
                    <a href="{{ route('ecommerce.home') }}" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Inicio
                    </a>

                    <a href="#categorias" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Categorías
                    </a>

                    <a href="#ofertas" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        Ofertas
                    </a>

                    <a href="#nuevos" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                        Nuevos
                    </a>
                </div>
            </div>

            {{-- Enlaces Institucionales --}}
            <div class="mb-6">
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-2">Institucional</h3>
                <div class="space-y-1">
                    <a href="{{ route('about') }}" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Sobre Nosotros
                    </a>

                    <a href="{{ route('contact') }}" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contacto
                    </a>

                    <a href="{{ route('recetario') }}" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Recetario
                    </a>

                    <a href="{{ route('distribuidores') }}" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Distribuidores
                    </a>
                </div>
            </div>

            {{-- Sección de Usuario --}}
            <div class="mb-6">
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3 px-2">Mi Cuenta</h3>
                <div class="space-y-1">
                    <a href="#login" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        Iniciar Sesión
                    </a>

                    <a href="#register" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        Registrarse
                    </a>

                    <a href="#orders" 
                       class="nav-link flex items-center py-3 px-4 text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg font-medium transition-all duration-200 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Mis Pedidos
                    </a>
                </div>
            </div>
        </nav>
        
        {{-- Footer del sidebar --}}
        <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-gray-100 bg-gradient-to-t from-gray-50 to-white">
            <div class="text-center">
                <p class="text-sm text-gray-500 font-medium">DulCesar</p>
                <p class="text-xs text-gray-400 mt-1">Endulzando tu vida</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Funciones para el sidebar móvil
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const closeBtn = document.getElementById('close-sidebar-btn');
        const hamburgerBtn = document.getElementById('hamburger-btn');

        function openSidebar() {
            sidebar.classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('sidebar-panel').classList.remove('-translate-x-full');
            }, 50);
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            document.getElementById('sidebar-panel').classList.add('-translate-x-full');
            setTimeout(() => {
                sidebar.classList.add('hidden');
            }, 300);
            document.body.classList.remove('overflow-hidden');
        }

        hamburgerBtn?.addEventListener('click', openSidebar);
        closeBtn?.addEventListener('click', closeSidebar);
        overlay?.addEventListener('click', closeSidebar);

        // Cerrar con la tecla Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSidebar();
            }
        });
    });
</script>
@endpush
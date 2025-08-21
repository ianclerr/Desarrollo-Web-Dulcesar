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
</style>

<div id="mobile-sidebar" class="fixed inset-0 z-30 lg:hidden hidden">
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
        
        {{-- Navegación --}}
        <nav class="p-6 space-y-2">
            <a href="{{ route('ecommerce.home') }}" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Inicio Ecommerce
            </a>
            
            <a href="{{ route('home') }}" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Sobre Nosotros
            </a>
            
            <a href="#productos" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                Productos
            </a>
            
            <a href="{{ route('contact') }}" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Contacto
            </a>
            
            <a href="{{ route('recetario') }}" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Recetario
            </a>
            
            <a href="{{ route('distribuidores') }}" 
               class="nav-link flex items-center py-4 px-4 text-gray-700 hover:text-orange-600 hover:bg-gradient-to-r hover:from-orange-50 hover:to-orange-25 rounded-xl font-medium transition-all duration-200 group">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Distribuidores
            </a>
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
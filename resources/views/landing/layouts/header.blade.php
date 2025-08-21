{{-- Header fijo --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg border-b border-orange-100">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                {{-- Logo --}}
                <div class="flex items-center space-x-3" >
        <img src="{{asset('images/logos/logo_rojo.png')}}" alt="DulCesar" class="w-12 h-12 hover:scale-105 transition-transform duration-300 drop-shadow-md w-30 h-13">
</div>
                
                {{-- Menú Desktop --}}
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Inicio</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Sobre Nosotros</a>
                    <a href="#" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Productos</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Contacto</a>
                    <a href="{{ route('recetario') }}" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Recetario</a>
                    <a href="{{ route('distribuidores') }}" class="text-gray-700 hover:text-orange-600 font-medium transition-all duration-300 hover:scale-105">Distribuidores</a>
                </nav>
                
                {{-- Botón hamburguesa --}}
                <button id="hamburger-btn" class="lg:hidden p-2 rounded-lg hover:bg-orange-50 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
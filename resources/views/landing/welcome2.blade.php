<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DulCesar - Dulces Momentos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #ff6b35 0%, #ff8e53 50%, #ffb347 100%); }
        .hero-gradient { background: linear-gradient(135deg, rgba(255, 107, 53, 0.95) 0%, rgba(255, 142, 83, 0.9) 50%, rgba(255, 179, 71, 0.85) 100%); }
        .text-shadow { text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); }
        .floating-animation { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
        .pulse-orange { animation: pulse-orange 2s infinite; }
        @keyframes pulse-orange { 0%, 100% { box-shadow: 0 0 0 0 rgba(255, 107, 53, 0.7); } 50% { box-shadow: 0 0 0 20px rgba(255, 107, 53, 0); } }
        .card-hover { transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1); }
        .card-hover:hover { transform: translateY(-8px) scale(1.03); box-shadow: 0 25px 50px -12px rgba(255, 107, 53, 0.25); }
        .sidebar-overlay { backdrop-filter: blur(8px); }
    </style>
</head>
<body class="bg-white overflow-x-hidden">

    {{-- Header Principal --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                {{-- Logo --}}
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center shadow-lg">
                        <span class="text-white font-black text-xl">D</span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-black text-gray-800">DulCesar</h1>
                        <p class="text-xs text-orange-500 font-semibold tracking-wide">DULCES MOMENTOS</p>
                    </div>
                </div>

                {{-- Navegación Desktop --}}
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="#inicio" class="text-gray-700 hover:text-orange-500 font-semibold transition-colors duration-300 relative group">
                        Inicio
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#sobre-nosotros" class="text-gray-700 hover:text-orange-500 font-semibold transition-colors duration-300 relative group">
                        Sobre Nosotros
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#productos" class="text-gray-700 hover:text-orange-500 font-semibold transition-colors duration-300 relative group">
                        Productos
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#blog" class="text-gray-700 hover:text-orange-500 font-semibold transition-colors duration-300 relative group">
                        Blog
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#distribuidores" class="text-gray-700 hover:text-orange-500 font-semibold transition-colors duration-300 relative group">
                        Distribuidores
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>

                {{-- Botón Menú Móvil --}}
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-orange-50 transition-colors duration-300">
                    <div class="w-6 h-6 flex flex-col justify-center items-center space-y-1">
                        <span class="w-full h-0.5 bg-gray-700 transition-all duration-300"></span>
                        <span class="w-full h-0.5 bg-gray-700 transition-all duration-300"></span>
                        <span class="w-full h-0.5 bg-gray-700 transition-all duration-300"></span>
                    </div>
                </button>
            </div>
        </div>
    </header>

    {{-- Sidebar Móvil --}}
    <div id="mobile-sidebar" class="fixed inset-0 z-50 lg:hidden transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="absolute inset-0 bg-black/50 sidebar-overlay"></div>
        <div class="absolute right-0 top-0 h-full w-80 bg-white shadow-2xl">
            <div class="p-6">
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 gradient-bg rounded-full flex items-center justify-center">
                            <span class="text-white font-black text-lg">D</span>
                        </div>
                        <div>
                            <h1 class="text-xl font-black text-gray-800">DulCesar</h1>
                            <p class="text-xs text-orange-500 font-semibold">DULCES MOMENTOS</p>
                        </div>
                    </div>
                    <button id="close-sidebar" class="p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <nav class="space-y-4">
                    <a href="#inicio" class="block py-3 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-500 rounded-lg transition-all duration-300 font-semibold">Inicio</a>
                    <a href="#sobre-nosotros" class="block py-3 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-500 rounded-lg transition-all duration-300 font-semibold">Sobre Nosotros</a>
                    <a href="#productos" class="block py-3 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-500 rounded-lg transition-all duration-300 font-semibold">Productos</a>
                    <a href="#blog" class="block py-3 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-500 rounded-lg transition-all duration-300 font-semibold">Blog</a>
                    <a href="#distribuidores" class="block py-3 px-4 text-gray-700 hover:bg-orange-50 hover:text-orange-500 rounded-lg transition-all duration-300 font-semibold">Distribuidores</a>
                </nav>
            </div>
        </div>
    </div>

    {{-- Sección Hero/Portada --}}
    <section id="inicio" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');">
        </div>
        <div class="absolute inset-0 hero-gradient"></div>
        
        <div class="relative z-10 text-center px-4 max-w-6xl mx-auto">
            <div class="floating-animation">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 text-shadow leading-tight">
                    Descubrí los dulces que
                    <span class="block gradient-bg bg-clip-text text-transparent">endulzan</span>
                    tus momentos
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-white/90 mb-12 font-light text-shadow max-w-3xl mx-auto">
                    Dulces Momentos
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button class="px-8 py-4 bg-white text-orange-500 font-bold text-lg rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 pulse-orange">
                    Explorá nuestros dulces
                </button>
                <button class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold text-lg rounded-full hover:bg-white hover:text-orange-500 transition-all duration-300 shadow-lg">
                    Ver catálogo completo
                </button>
            </div>
        </div>

        {{-- Elementos decorativos flotantes --}}
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-32 right-16 w-32 h-32 bg-orange-300/30 rounded-full blur-2xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-yellow-300/40 rounded-full blur-lg animate-bounce delay-500"></div>
    </section>
 <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ff6b35" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-gray-800 mb-6">
                    Lo que dicen de <span class="gradient-bg bg-clip-text text-transparent font-bold">DulCesar</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Testimonios de clientes satisfechos y distribuidores que confían en la calidad de nuestros dulces artesanales
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Testimonio 1 --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="flex text-orange-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic text-lg leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">M</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Ejemplo Cliente</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>

                {{-- Testimonio 2 --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="flex text-orange-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic text-lg leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">C</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Ejemplo 2</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>

                {{-- Testimonio 3 --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-2xl shadow-xl card-hover">
                    <div class="flex items-center mb-6">
                        <div class="flex text-orange-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic text-lg leading-relaxed">
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">A</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Ejemplo 3</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
    {{-- Propuesta de Valor Centrada --}}
    <section class="py-24 bg-gradient-to-br from-orange-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ff6b35" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="inline-block p-3 bg-orange-100 rounded-full mb-8">
                    <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                </div>
                
                <h2 class="text-4xl md:text-6xl lg:text-7xl font-black text-gray-800 mb-8 leading-tight">
                    Más de <span class="gradient-bg bg-clip-text text-transparent">30 años</span>
                    <span class="block">endulzando momentos especiales</span>
                </h2>
                
                <p class="text-xl md:text-2xl text-gray-600 mb-12 font-light leading-relaxed max-w-3xl mx-auto">
                    Tres décadas de experiencia nos respaldan como líderes en la industria de dulces artesanales, 
                    llevando productos de máxima calidad a hogares de todo Paraguay.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8 mt-16">
                    <div class="bg-white p-8 rounded-2xl shadow-xl card-hover">
                        <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-black text-white">30+</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Años de Experiencia</h3>
                        <p class="text-gray-600">Décadas perfeccionando nuestras recetas de dulces.</p>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-xl card-hover">
                        <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-black text-white">50+</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Variedades</h3>
                        <p class="text-gray-600">Diferentes tipos de dulces artesanales.</p>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-xl card-hover">
                        <div class="w-16 h-16 gradient-bg rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-black text-white">1M+</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Momentos</h3>
                        <p class="text-gray-600">Millones de momentos endulzados con nuestros productos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección de Categorías de Productos --}}
    <section id="productos" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-gray-800 mb-6">
                    Nuestras <span class="gradient-bg bg-clip-text text-transparent font-bold">Especialidades</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Descubrí nuestra amplia gama de dulces artesanales, cada uno diseñado para endulzar 
                    tus momentos especiales.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                {{-- Dulces Artesanales --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Dulces Artesanales</h3>
                    <p class="text-sm text-gray-600">Sabores únicos y tradicionales</p>
                </div>

                {{-- Bombones --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5zM8 15a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm2-4a1 1 0 11-2 0 1 1 0 012 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Bombones</h3>
                    <p class="text-sm text-gray-600">Chocolate premium artesanal</p>
                </div>

                {{-- Alfajores --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm4 14a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Alfajores</h3>
                    <p class="text-sm text-gray-600">Tradición paraguaya</p>
                </div>

                {{-- Tortas --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Tortas</h3>
                    <p class="text-sm text-gray-600">Para eventos especiales</p>
                </div>

                {{-- Galletas --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Galletas</h3>
                    <p class="text-sm text-gray-600">Caseras y deliciosas</p>
                </div>

                {{-- Mermeladas --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-2xl font-black text-white">0</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Mermeladas</h3>
                    <p class="text-sm text-gray-600">Frutas naturales</p>
                </div>

                {{-- Postres --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Postres</h3>
                    <p class="text-sm text-gray-600">Creaciones únicas</p>
                </div>

                {{-- Chocolates --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm4 14a1 1 0 100-2 1 1 0 000 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Chocolates</h3>
                    <p class="text-sm text-gray-600">Artesanales premium</p>
                </div>

                {{-- Helados --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Helados</h3>
                    <p class="text-sm text-gray-600">Sabores únicos</p>
                </div>

                {{-- Panificados --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Panificados</h3>
                    <p class="text-sm text-gray-600">Frescos diarios</p>
                </div>

                {{-- Eventos --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl shadow-lg card-hover text-center group">
                    <div class="w-20 h-20 gradient-bg rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Eventos</h3>
                    <p class="text-sm text-gray-600">Catering especial</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Llamado a la Acción --}}
    <section class="py-24 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z"/%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-black text-white mb-8 text-shadow">
                    ¿Listo para endulzar
                    <span class="block">tus momentos especiales?</span>
                </h2>
                <p class="text-xl md:text-2xl text-white/90 mb-12 font-light text-shadow max-w-2xl mx-auto">
                    Descubrí por qué miles de familias eligen nuestros dulces artesanales todos los días
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="px-10 py-5 bg-white text-orange-500 font-black text-xl rounded-full shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300 hover:bg-gray-50 group">
                        <span class="mr-3">Conocé nuestros dulces</span>
                        <svg class="w-6 h-6 inline-block group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    
                    <button class="px-10 py-5 bg-transparent border-3 border-white text-white font-black text-xl rounded-full hover:bg-white hover:text-orange-500 transition-all duration-300 shadow-lg group">
                        <span class="mr-3">Descargá nuestro catálogo</span>
                        <svg class="w-6 h-6 inline-block group-hover:bounce transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
                
                {{-- Estadísticas destacadas --}}
                <div class="grid md:grid-cols-3 gap-8 mt-20 text-white">
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-black mb-2">50+</div>
                        <div class="text-lg font-semibold opacity-90">Variedades de Dulces</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-black mb-2">99%</div>
                        <div class="text-lg font-semibold opacity-90">Satisfacción Cliente</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl md:text-5xl font-black mb-2">07:00-17:00</div>
                        <div class="text-lg font-semibold opacity-90">Horarios de Atención</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Elementos decorativos --}}
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/20 rounded-full blur-xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 right-1/4 w-16 h-16 bg-white/15 rounded-full blur-lg animate-bounce delay-500"></div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                {{-- Logo y descripción --}}
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 gradient-bg rounded-full flex items-center justify-center">
                            <span class="text-white font-black text-xl">D</span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-black text-white">DulCesar</h1>
                            <p class="text-orange-400 font-semibold text-sm">Dulces Momentos</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md leading-relaxed">
                        Más de 30 años endulzando momentos especiales en todo Paraguay. 
                        Nuestro compromiso es brindar dulces artesanales que deleitan a tu familia.
                    </p>
                    
                    {{-- Redes Sociales --}}
                    <div class="flex space-x-4">
                        <a href="https://instagram.com/productos_dulcesar" target="_blank" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@dulcesarpy" target="_blank" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/DulCesarPy" target="_blank" class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors duration-300">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Enlaces Rápidos --}}
                <div>
                    <h3 class="text-lg font-bold mb-6 text-orange-400">Enlaces Rápidos</h3>
                    <ul class="space-y-3">
                        <li><a href="#inicio" class="text-gray-300 hover:text-orange-400 transition-colors duration-300">Inicio</a></li>
                        <li><a href="#sobre-nosotros" class="text-gray-300 hover:text-orange-400 transition-colors duration-300">Sobre Nosotros</a></li>
                        <li><a href="#productos" class="text-gray-300 hover:text-orange-400 transition-colors duration-300">Productos</a></li>
                        <li><a href="#blog" class="text-gray-300 hover:text-orange-400 transition-colors duration-300">Blog</a></li>
                        <li><a href="#distribuidores" class="text-gray-300 hover:text-orange-400 transition-colors duration-300">Distribuidores</a></li>
                    </ul>
                </div>

                {{-- Contacto --}}
                <div>
                    <h3 class="text-lg font-bold mb-6 text-orange-400">Contacto</h3>
                    <div class="space-y-3 text-gray-300">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Celsa Speratti y de la honestidad 1372, San Lorenzo, Paraguay</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span>(021) 575-776 / (0974) 699-585</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span>info@dulcesar.com.py</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <span>07:00 - 17:00</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Línea divisoria --}}
            <div class="border-t border-gray-700 pt-8 mt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-gray-400 text-center md:text-left">
                        © {{ date('Y') }} Grupo Dul-Cesar Industrial y Comercial S.A. Todos los derechos reservados.
                    </p>
                    <div class="text-center md:text-right">
                        <p class="text-orange-400 font-semibold text-lg">
                            "Dulces Momentos"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- JavaScript para el menú móvil --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const closeSidebar = document.getElementById('close-sidebar');
            const sidebarOverlay = mobileSidebar.querySelector('.sidebar-overlay');

            // Abrir sidebar
            mobileMenuBtn.addEventListener('click', function() {
                mobileSidebar.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
            });

            // Cerrar sidebar
            function closeSidebarFunction() {
                mobileSidebar.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }

            closeSidebar.addEventListener('click', closeSidebarFunction);
            sidebarOverlay.addEventListener('click', closeSidebarFunction);

            // Cerrar sidebar al hacer clic en enlaces
            const sidebarLinks = mobileSidebar.querySelectorAll('nav a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', closeSidebarFunction);
            });

            // Scroll suave para los enlaces del menú
            const menuLinks = document.querySelectorAll('a[href^="#"]');
            menuLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        const headerHeight = 80;
                        const targetPosition = targetSection.offsetTop - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Efecto parallax sutil en el hero
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const heroSection = document.querySelector('#inicio');
                const heroBackground = heroSection.querySelector('div[style*="background-image"]');
                
                if (heroBackground) {
                    heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // Animación de aparición de elementos al hacer scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Aplicar animación a las tarjetas de productos
            const productCards = document.querySelectorAll('.card-hover');
            productCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>

</body>
</html>
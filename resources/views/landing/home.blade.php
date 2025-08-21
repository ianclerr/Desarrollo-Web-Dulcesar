@extends('landing.layouts.app')

@section('content')
<div class="font-body text-gray-800 overflow-x-hidden">
    {{-- Hero Section: Slider profesional + Césarito (no full-screen) --}}
    <section class="relative bg-gradient-to-br from-orange-400 via-red-500 to-pink-500 text-white py-12 lg:py-16 overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                {{-- Slider --}}
                <div>
                    <div id="landing-slider" class="relative overflow-hidden rounded-3xl shadow-2xl bg-white/10 backdrop-blur-sm h-72 lg:h-80">
                        {{-- Slides --}}
                        <div class="landing-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                            <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                                <span class="text-xs lg:text-sm">Desde 1982</span>
                            </div>
                            <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Mermeladas Artesanales</h2>
                            <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Sabores Dul‑Cesar: frutilla, naranja, guayaba y más.</p>
                            <div class="mt-5">
                                <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Ver productos</a>
                            </div>
                        </div>
                        <div class="landing-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                            <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                                <span class="text-xs lg:text-sm">Calidad Premium</span>
                            </div>
                            <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Jugos Naturales</h2>
                            <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Citrus, Energy, Néctar y más presentaciones.</p>
                            <div class="mt-5">
                                <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Explorar</a>
                            </div>
                        </div>
                        <div class="landing-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                            <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                                <span class="text-xs lg:text-sm">Novedades</span>
                            </div>
                            <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Aderezos & Salsas</h2>
                            <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Ajo, soja, picante, vinagres y más sabores.</p>
                            <div class="mt-5">
                                <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Ver más</a>
                            </div>
                        </div>

                        {{-- Controles --}}
                        <button id="landing-prev" class="hidden sm:flex absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-white/30 hover:bg-white/50 rounded-full items-center justify-center transition">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button id="landing-next" class="hidden sm:flex absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-white/30 hover:bg-white/50 rounded-full items-center justify-center transition">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>

                        {{-- Dots --}}
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                            <button class="landing-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                            <button class="landing-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                            <button class="landing-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                        </div>
                    </div>
                </div>

                {{-- Césarito a un lado --}}
                <div class="relative flex items-end justify-center lg:justify-end">
                    <img src="{{ asset('images/imagenes/cesarito 1.png') }}" alt="Cesarito Dul‑Cesar" class="w-56 sm:w-64 lg:w-80 drop-shadow-[0_25px_60px_rgba(0,0,0,0.45)] select-none">
                </div>
            </div>
        </div>
    </section>

    {{-- Propuesta de valor con cuadrille --}}
    <section class="py-20 lg:py-32 relative overflow-hidden">
        {{-- Fondo con cuadrille --}}
        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
        
        {{-- Overlay gradiente --}}
        <div class="absolute inset-0 bg-gradient-to-br from-orange-50/80 to-amber-50/80"></div>
        
        <div class="container mx-auto px-4 lg:px-8 text-center relative z-10">
            <div class="reveal-on-scroll max-w-4xl mx-auto">
                <h3 class="font-display text-4xl lg:text-6xl font-bold text-gray-800 mb-8 leading-tight">
                    Más de <span class="text-orange-600">40 años</span><br>
                    endulzando momentos especiales
                </h3>
                <p class="text-xl lg:text-2xl text-gray-600 font-light leading-relaxed">
                    Cuatro décadas perfeccionando el arte de los dulces artesanales, creando momentos inolvidables y endulzando la vida de familias en todo Paraguay.
                </p>
                
                {{-- Elementos decorativos con cuadrille --}}
                <div class="mt-12 flex justify-center space-x-8">
                    <div class="w-16 h-16 cuadrille-pattern rounded-full border-4 border-orange-200 shadow-lg cuadrille-float"></div>
                    <div class="w-12 h-12 cuadrille-pattern rounded-full border-4 border-orange-200 shadow-lg cuadrille-float" style="animation-delay: -1s;"></div>
                    <div class="w-16 h-16 cuadrille-pattern rounded-full border-4 border-orange-200 shadow-lg cuadrille-float" style="animation-delay: -2s;"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Slider de Productos Destacados --}}
    <section class="py-20 lg:py-32 bg-gradient-to-br from-orange-50 to-amber-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h4 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Productos <span class="text-orange-600">Destacados</span>
                </h4>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Descubrí nuestros productos más populares, elaborados con la mejor calidad y tradición
                </p>
            </div>
            
            {{-- Slider de productos --}}
            <div class="relative max-w-6xl mx-auto">
                <div class="product-slider overflow-hidden rounded-3xl shadow-2xl">
                    <div class="flex transition-transform duration-500 ease-in-out" id="product-slider-container">
                        {{-- Producto 1 --}}
                        <div class="product-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-6">
                            <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 h-full">
                                <div class="w-full h-48 bg-gradient-to-br from-orange-200 to-red-200 rounded-xl mb-6 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-4 border-4 border-orange-200"></div>
                                        <p class="text-gray-600 font-semibold">Mermelada de Guayaba</p>
                                    </div>
                                </div>
                                <h5 class="font-display text-2xl font-bold text-gray-800 mb-4">Mermelada de Guayaba</h5>
                                <p class="text-gray-600 mb-6">Nuestro producto estrella, elaborado con guayabas frescas y receta tradicional.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold text-lg">Premium</span>
                                    <button class="px-4 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition-colors">
                                        Ver más
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Producto 2 --}}
                        <div class="product-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-6">
                            <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 h-full">
                                <div class="w-full h-48 bg-gradient-to-br from-amber-200 to-yellow-200 rounded-xl mb-6 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-4 border-4 border-amber-200"></div>
                                        <p class="text-gray-600 font-semibold">Dulce de Mamón</p>
                                    </div>
                                </div>
                                <h5 class="font-display text-2xl font-bold text-gray-800 mb-4">Dulce de Mamón</h5>
                                <p class="text-gray-600 mb-6">Elaborado con mamón maduro y azúcar, siguiendo recetas ancestrales.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600 font-bold text-lg">Tradicional</span>
                                    <button class="px-4 py-2 bg-amber-500 text-white rounded-full hover:bg-amber-600 transition-colors">
                                        Ver más
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Producto 3 --}}
                        <div class="product-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-6">
                            <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 h-full">
                                <div class="w-full h-48 bg-gradient-to-br from-red-200 to-pink-200 rounded-xl mb-6 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-4 border-4 border-red-200"></div>
                                        <p class="text-gray-600 font-semibold">Aderezo Especial</p>
                                    </div>
                                </div>
                                <h5 class="font-display text-2xl font-bold text-gray-800 mb-4">Aderezo Especial</h5>
                                <p class="text-gray-600 mb-6">Perfecto para acompañar tus comidas con un toque especial de sabor.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-red-600 font-bold text-lg">Gourmet</span>
                                    <button class="px-4 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors">
                                        Ver más
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Producto 4 --}}
                        <div class="product-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-6">
                            <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 h-full">
                                <div class="w-full h-48 bg-gradient-to-br from-green-200 to-emerald-200 rounded-xl mb-6 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-4 border-4 border-green-200"></div>
                                        <p class="text-gray-600 font-semibold">Mermelada Light</p>
                                    </div>
                                </div>
                                <h5 class="font-display text-2xl font-bold text-gray-800 mb-4">Mermelada Light</h5>
                                <p class="text-gray-600 mb-6">Sabor auténtico con menos calorías, perfecta para cuidar tu salud.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-green-600 font-bold text-lg">Light</span>
                                    <button class="px-4 py-2 bg-green-500 text-white rounded-full hover:bg-green-600 transition-colors">
                                        Ver más
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Controles del slider de productos --}}
                <button class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/80 backdrop-blur-md rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 hover:scale-110 shadow-lg" id="prev-product">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/80 backdrop-blur-md rounded-full flex items-center justify-center hover:bg-white transition-all duration-300 hover:scale-110 shadow-lg" id="next-product">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    {{-- Sección de tradición con cuadrille --}}
    <section class="py-20 lg:py-32 relative overflow-hidden">
        {{-- Fondo con cuadrille --}}
        <div class="absolute inset-0 bg-cover bg-center opacity-5" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal-on-scroll">
                <h4 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    <span class="text-orange-600">Tradición</span> y <span class="text-red-600">Calidad</span>
                </h4>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Nuestros productos reflejan la autenticidad del sabor paraguayo, elaborados con técnicas tradicionales y los mejores ingredientes
                </p>
            </div>
            
            {{-- Grid de características --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
                {{-- Característica 1 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-6 border-4 border-orange-200 cuadrille-float"></div>
                    <h5 class="font-display text-2xl font-bold text-gray-800 mb-4 text-center">Artesanal</h5>
                    <p class="text-gray-600 text-center leading-relaxed">Cada producto es elaborado con técnicas tradicionales que preservan el auténtico sabor paraguayo.</p>
                </div>
                
                {{-- Característica 2 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-6 border-4 border-red-200 cuadrille-float" style="animation-delay: -1s;"></div>
                    <h5 class="font-display text-2xl font-bold text-gray-800 mb-4 text-center">Natural</h5>
                    <p class="text-gray-600 text-center leading-relaxed">Utilizamos solo ingredientes naturales de la más alta calidad, sin conservantes artificiales.</p>
                </div>
                
                {{-- Característica 3 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="w-20 h-20 cuadrille-pattern rounded-full mx-auto mb-6 border-4 border-orange-200 cuadrille-float" style="animation-delay: -2s;"></div>
                    <h5 class="font-display text-2xl font-bold text-gray-800 mb-4 text-center">Familiar</h5>
                    <p class="text-gray-600 text-center leading-relaxed">Más de 40 años de tradición familiar, transmitiendo sabores de generación en generación.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Categorías de productos - Grid 4x2 --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-orange-50 to-amber-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16 reveal-on-scroll">
            <h4 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Nuestras <span class="text-orange-600">Categorías</span>
            </h4>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                Cada categoría representa años de perfección, tradición y dulzura auténtica
            </p>
            
            {{-- Buscador --}}
            <div class="max-w-lg mx-auto mb-12">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        id="product-search" 
                        placeholder="Buscar productos por nombre..." 
                        class="w-full pl-12 pr-24 py-4 text-lg border-2 border-orange-200 rounded-full focus:border-orange-500 focus:ring-4 focus:ring-orange-100 focus:outline-none transition-all duration-300 bg-white/80 backdrop-blur-sm shadow-lg"
                    >
                    <button 
                        type="button" 
                        onclick="searchProducts()"
                        class="absolute inset-y-0 right-0 px-6 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full mr-1 my-1 hover:from-orange-600 hover:to-red-600 focus:ring-4 focus:ring-orange-200 focus:outline-none transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 font-semibold"
                    >
                        Buscar
                    </button>
                </div>
                
                {{-- Sugerencias de búsqueda --}}
                <div class="flex flex-wrap justify-center gap-2 mt-4">
                    <span class="text-sm text-gray-500 mr-2">Populares:</span>
                    <button onclick="quickSearch('mermeladas')" class="text-sm bg-orange-100 text-orange-700 px-3 py-1 rounded-full hover:bg-orange-200 transition-colors duration-200">
                        Mermeladas
                    </button>
                    <button onclick="quickSearch('aderezos')" class="text-sm bg-orange-100 text-orange-700 px-3 py-1 rounded-full hover:bg-orange-200 transition-colors duration-200">
                        Aderezos
                    </button>
                    <button onclick="quickSearch('jugos')" class="text-sm bg-orange-100 text-orange-700 px-3 py-1 rounded-full hover:bg-orange-200 transition-colors duration-200">
                        Jugos
                    </button>
                    <button onclick="quickSearch('zero')" class="text-sm bg-orange-100 text-orange-700 px-3 py-1 rounded-full hover:bg-orange-200 transition-colors duration-200">
                        Zero
                    </button>
                </div>
            </div>
        </div>

        <!-- AGREGAR LOS BENDITOS GRID Y DINAMIC -->
        
        {{-- Primera fila - 4 categorías --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto mb-8">
            {{-- Aderezos --}}
            <div class="group bg-gradient-to-br from-red-400 to-red-600 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-red-500/30 hover:-translate-y-2 hover:scale-105" onclick="openAderezosModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Aderezos</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Línea premium artesanal</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">25+ variedades</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Granos --}}
            <div class="group bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-amber-500/30 hover:-translate-y-2 hover:scale-105" onclick="openGranosModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <circle cx="10" cy="10" r="8"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Granos</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Alta calidad natural</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">20+ opciones</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Jugos --}}
            <div class="group bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-orange-500/30 hover:-translate-y-2 hover:scale-105" onclick="openJugosModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Jugos</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">100% naturales</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">15+ sabores</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Mermeladas --}}
            <div class="group bg-gradient-to-br from-yellow-400 to-amber-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-yellow-500/30 hover:-translate-y-2 hover:scale-105" onclick="openMermeladasModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Mermeladas</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Artesanales tradicionales</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">30+ variedades</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>
        
        {{-- Segunda fila - 4 categorías --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto mb-12">
            {{-- Mermeladas Light --}}
            <div class="group bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-green-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Mermeladas Light</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Sabor sin culpa</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">12+ opciones</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Zero --}}
            <div class="group bg-gradient-to-br from-purple-400 to-indigo-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6 2a1 1 0 000 2h8a1 1 0 100-2H6zM3 6a1 1 0 011-1h12a1 1 0 011 1v8a1 1 0 01-1 1H4a1 1 0 01-1-1V6z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Zero</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Sin azúcar añadida</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">18+ productos</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Navideños --}}
            <div class="group bg-gradient-to-br from-teal-400 to-cyan-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-teal-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4zM4 9a1 1 0 000 2v5a2 2 0 002 2h8a2 2 0 002-2v-5a1 1 0 100-2H4z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Navideños</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Especialidades festivas</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">15+ opciones</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            
            {{-- Repostería --}}
            <div class="group bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-pink-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                <div class="h-full flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Repostería</h5>
                        <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Para tus creaciones</p>
                    </div>
                    <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">22+ ingredientes</div>
                </div>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
        </div>
        
        {{-- Categorías adicionales (ocultas inicialmente) --}}
        <div id="additional-categories" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto mb-12">
                {{-- Saludables --}}
                <div class="group bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-yellow-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"/>
                                </svg>
                            </div>
                            <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Saludables</h5>
                            <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Nutrición y sabor</p>
                        </div>
                        <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">14+ opciones</div>
                    </div>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                {{-- Snacks --}}
                <div class="group bg-gradient-to-br from-orange-600 to-red-600 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-orange-600/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="10" r="6"/>
                                </svg>
                            </div>
                            <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Snacks</h5>
                            <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Para cualquier momento</p>
                        </div>
                        <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">16+ variedades</div>
                    </div>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                {{-- Tradicionales --}}
                <div class="group bg-gradient-to-br from-amber-600 to-yellow-600 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-amber-600/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5z"/>
                                </svg>
                            </div>
                            <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Tradicionales</h5>
                            <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Recetas de siempre</p>
                        </div>
                        <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">10+ clásicos</div>
                    </div>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                
                {{-- Especiales --}}
                <div class="group bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-white shadow-xl cursor-pointer transition-all duration-500 hover:shadow-2xl hover:shadow-indigo-500/30 hover:-translate-y-2 hover:scale-105" onclick="openCategoriesModal()">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h5 class="font-display text-2xl font-bold mb-3 group-hover:text-white transition-colors duration-300">Especiales</h5>
                            <p class="text-white/90 text-base group-hover:text-white transition-colors duration-300">Ediciones limitadas</p>
                        </div>
                        <div class="text-white/70 text-sm font-medium mt-4 group-hover:text-white/90 transition-colors duration-300">8+ únicas</div>
                    </div>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
        
        {{-- Botón Ver más productos --}}
        <div class="text-center">
            <button 
                id="toggle-categories-btn"
                onclick="toggleAdditionalCategories()"
                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold text-lg rounded-full hover:from-orange-600 hover:to-red-600 focus:ring-4 focus:ring-orange-200 focus:outline-none transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105"
            >
                <span id="btn-text">Ver más productos</span>
                <svg id="btn-icon" class="ml-2 w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
    </div>
</section>
<script>
function toggleAdditionalCategories() {
    const additionalCategories = document.getElementById('additional-categories');
    const btn = document.getElementById('toggle-categories-btn');
    const btnText = document.getElementById('btn-text');
    const btnIcon = document.getElementById('btn-icon');
    
    if (additionalCategories.classList.contains('hidden')) {
        // Mostrar categorías adicionales
        additionalCategories.classList.remove('hidden');
        additionalCategories.style.opacity = '0';
        additionalCategories.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            additionalCategories.style.transition = 'all 0.5s ease-out';
            additionalCategories.style.opacity = '1';
            additionalCategories.style.transform = 'translateY(0)';
        }, 10);
        
        btnText.textContent = 'Ver menos productos';
        btnIcon.style.transform = 'rotate(180deg)';
    } else {
        // Ocultar categorías adicionales
        additionalCategories.style.transition = 'all 0.3s ease-in';
        additionalCategories.style.opacity = '0';
        additionalCategories.style.transform = 'translateY(-20px)';
        
        setTimeout(() => {
            additionalCategories.classList.add('hidden');
        }, 300);
        
        btnText.textContent = 'Ver más productos';
        btnIcon.style.transform = 'rotate(0deg)';
    }
}
</script>
{{-- Sección de Ubicación --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-orange-50">
    <div class="container mx-auto px-4 lg:px-8">
        {{-- Encabezado --}}
        <div class="text-center mb-16 reveal-on-scroll">
            <h4 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Nuestra <span class="text-orange-600">Ubicación</span>
            </h4>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Visítanos en nuestras instalaciones y descubre de primera mano la calidad de nuestros productos
            </p>
        </div>

        {{-- Mapa --}}
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-3xl p-4 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.4247538301897!2d-57.525793925651655!3d-25.35707723000846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945dae851a06563d%3A0x46de4aeebb30b2ce!2sProductos%20Dul-Cesar!5e0!3m2!1ses!2spy!4v1750490688084!5m2!1ses!2spy" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-96 lg:h-[450px] grayscale-0 hover:grayscale-0 transition-all duration-300">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Sección de Valoraciones --}}
    <section class="py-20 lg:py-32 bg-gradient-to-br from-orange-50 to-amber-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h3 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Lo que dicen nuestros <span class="text-orange-600">clientes</span>
                </h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Más de 30 años endulzando momentos especiales y creando experiencias inolvidables
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                {{-- Valoración 1 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            MC
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ejemplo 1</h4>
                            <p class="text-gray-600 text-sm">Cliente"</p>
                        </div>
                    </div>
                </div>

                {{-- Valoración 2 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            RL
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ejemplo 2</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>

                {{-- Valoración 3 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            AG
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ejemplo 3</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>

                {{-- Valoración 4 --}}
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            CS
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ejemplo 4</h4>
                            <p class="text-gray-600 text-sm">Cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-orange-50">
    <div class="container mx-auto px-4 lg:px-8">
        {{-- Encabezado --}}
        <div class="text-center mb-16 reveal-on-scroll">
            <h4 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                Blog & <span class="text-orange-600">Recetario</span>
            </h4>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Descubre recetas deliciosas, tips de cocina y consejos nutricionales con nuestros productos
            </p>
        </div>

        {{-- Ejemplos de Flyers --}}
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                {{-- Flyer 1: Receta --}}
                <div class="flyer-card bg-white rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500">
                    {{-- Header del Flyer --}}
                    <div class="relative mb-6">
                        <div class="recipe-badge absolute top-4 right-4 px-4 py-2 rounded-full text-white font-bold text-sm">
                            NUEVA RECETA
                        </div>
                        <div class="w-full h-48 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Torta de Chocolate</h3>
                                <p class="text-gray-600">Con Cacao Dul-Cesar Premium</p>
                            </div>
                        </div>
                    </div>

                    {{-- Contenido del Flyer --}}
                    <div class="space-y-6">
                        {{-- Ingredientes --}}
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                                Ingredientes Principales
                            </h4>
                            <div class="space-y-2">
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    <span class="font-semibold text-orange-600">Cacao Dul-Cesar</span> - 200g
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    <span class="font-semibold text-orange-600">Azúcar Dul-Cesar</span> - 150g
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    Huevos - 3 unidades
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    Harina - 200g
                                </div>
                            </div>
                        </div>

                        {{-- Pasos Rápidos --}}
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Pasos Rápidos
                            </h4>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="step-number">1</div>
                                    <p class="text-gray-700">Mezcla los ingredientes secos</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="step-number">2</div>
                                    <p class="text-gray-700">Incorpora huevos y líquidos</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="step-number">3</div>
                                    <p class="text-gray-700">Hornea 25 min a 180°C</p>
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="border-t pt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                30 min
                            </div>
                            <div class="text-orange-600 font-bold text-lg">#DulCesarRecetas</div>
                        </div>
                    </div>
                </div>

                {{-- Flyer 1: Receta --}}
                <div class="flyer-card bg-white rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500">
                    {{-- Header del Flyer --}}
                    <div class="relative mb-6">
                        <div class="recipe-badge absolute top-4 right-4 px-4 py-2 rounded-full text-white font-bold text-sm">
                            NUEVA RECETA
                        </div>
                        <div class="w-full h-48 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Torta de Chocolate</h3>
                                <p class="text-gray-600">Con Cacao Dul-Cesar Premium</p>
                            </div>
                        </div>
                    </div>

                    {{-- Contenido del Flyer --}}
                    <div class="space-y-6">
                        {{-- Ingredientes --}}
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                                Ingredientes Principales
                            </h4>
                            <div class="space-y-2">
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    <span class="font-semibold text-orange-600">Cacao Dul-Cesar</span> - 200g
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    <span class="font-semibold text-orange-600">Azúcar Dul-Cesar</span> - 150g
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    Huevos - 3 unidades
                                </div>
                                <div class="ingredient-item pl-4 py-2 rounded">
                                    Harina - 200g
                                </div>
                            </div>
                        </div>

                        {{-- Pasos Rápidos --}}
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Pasos Rápidos
                            </h4>
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="step-number">1</div>
                                    <p class="text-gray-700">Mezcla los ingredientes secos</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="step-number">2</div>
                                    <p class="text-gray-700">Incorpora huevos y líquidos</p>
                                </div>
                                <div class="flex items-start">
                                    <div class="step-number">3</div>
                                    <p class="text-gray-700">Hornea 25 min a 180°C</p>
                                </div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="border-t pt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                30 min
                            </div>
                            <div class="text-orange-600 font-bold text-lg">#DulCesarRecetas</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Botón "Ver todas las Recetas" --}}
<div class="mt-12 text-center">
    <a href="{{ route('recetario') }}" class="inline-block px-8 py-4 text-white bg-gradient-to-r from-orange-500 to-orange-600 rounded-full font-semibold text-lg shadow-lg hover:from-orange-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105">
        Ver todas las Recetas
    </a>
</div>
        </div>
    </div>
</section>

    {{-- Llamado a la acción con cuadrille --}}
    <section class="py-20 lg:py-32 relative overflow-hidden">
        {{-- Fondo con cuadrille --}}
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
        
        {{-- Overlay gradiente --}}
        <div class="absolute inset-0 bg-gradient-to-r from-orange-500/90 via-red-500/90 to-pink-500/90"></div>
        
        {{-- Elementos decorativos --}}
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl floating"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/10 rounded-full blur-xl floating-delayed"></div>
        
        <div class="container mx-auto px-4 lg:px-8 text-center relative z-10">
            <div class="max-w-4xl mx-auto reveal-on-scroll">
                <h6 class="font-display text-4xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                    ¿Listo para endulzar<br>
                    <span class="text-yellow-300">momentos especiales?</span>
                </h6>
                <p class="text-xl lg:text-2xl text-white/90 mb-12 font-light">
                    Descubrí nuestra gama completa de dulces artesanales y llevá tu evento al siguiente nivel
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="px-10 py-5 bg-white text-orange-600 font-bold text-lg rounded-full shadow-2xl hover:scale-105 hover:shadow-white/25 transition-all duration-300 hover:bg-gray-50">
                        Conocé nuestros productos
                    </button>
                    <button class="px-10 py-5 bg-transparent border-2 border-white text-white font-bold text-lg rounded-full hover:bg-white hover:text-orange-600 hover:scale-105 transition-all duration-300">
                        Descargá nuestro catálogo
                    </button>
                </div>
            </div>
        </div>
    </section>



    {{-- Botón para abrir modal general --}}
    <button onclick="openTodosModal()" class="fixed bottom-8 right-8 bg-gradient-to-r from-orange-500 to-amber-500 text-white p-4 rounded-full shadow-2xl hover:shadow-orange-500/25 transition-all duration-300 hover:scale-110 z-40">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </button>

    {{-- Botón de prueba --}}
    <button onclick="openTestModal()" class="fixed bottom-8 left-8 bg-red-500 text-white p-4 rounded-full shadow-2xl hover:shadow-red-500/25 transition-all duration-300 hover:scale-110 z-40">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </button>

    {{-- Incluir modales --}}
    @include('landing.modales.aderezos')
    @include('landing.modales.granos')
    @include('landing.modales.todos')
    @include('landing.modales.jugos')
    @include('landing.modales.mermeladas')
    @include('landing.modales.test')
    @include('landing.modales.scripts')
</div>

<script>
    
    // Slider profesional del hero (restaurado)
    function initLandingHeroSlider() {
        const slider = document.getElementById('landing-slider');
        if (!slider) return;
        const slides = slider.querySelectorAll('.landing-slide');
        const dots = slider.querySelectorAll('.landing-dot');
        const prev = document.getElementById('landing-prev');
        const next = document.getElementById('landing-next');
        let current = 0;
        let timer;

        function showSlide(index) {
            slides.forEach((s, i) => {
                s.style.opacity = i === index ? '1' : '0';
                s.style.zIndex = i === index ? '1' : '0';
            });
            dots.forEach((d, i) => {
                d.classList.toggle('bg-white', i === index);
                d.classList.toggle('bg-white/50', i !== index);
                d.style.transform = i === index ? 'scale(1.2)' : 'scale(1)';
            });
            current = index;
        }
        function nextSlide() { showSlide((current + 1) % slides.length); }
        function prevSlide() { showSlide((current - 1 + slides.length) % slides.length); }
        function startAuto() { stopAuto(); timer = setInterval(nextSlide, 5000); }
        function stopAuto() { if (timer) clearInterval(timer); }
        dots.forEach((d, i) => d.addEventListener('click', () => { showSlide(i); startAuto(); }));
        if (next) next.addEventListener('click', () => { nextSlide(); startAuto(); });
        if (prev) prev.addEventListener('click', () => { prevSlide(); startAuto(); });
        slider.addEventListener('mouseenter', stopAuto);
        slider.addEventListener('mouseleave', startAuto);
        showSlide(0);
        startAuto();
    }
    
    // Animaciones de scroll
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);
        
        // Observar elementos con clase reveal-on-scroll
        document.querySelectorAll('.reveal-on-scroll').forEach(function(el) {
            observer.observe(el);
        });
    }
    
    // Scroll suave para enlaces
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    // Efecto parallax sutil
    function initParallax() {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.floating, .floating-delayed, .floating-slow');
            
            parallaxElements.forEach(function(element) {
                const speed = 0.05;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
    }
    
    // Optimización de rendimiento para resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Código para reajustar elementos si es necesario
            console.log('Resize optimizado');
        }, 250);
    });
    

    
    // Slider de productos
    function initProductSlider() {
        const container = document.getElementById('product-slider-container');
        const slides = document.querySelectorAll('.product-slide');
        const prevBtn = document.getElementById('prev-product');
        const nextBtn = document.getElementById('next-product');
        
        let currentProductSlide = 0;
        const totalProductSlides = slides.length;
        const slidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
        const maxSlide = totalProductSlides - slidesToShow;
        
        function updateProductSlider() {
            const translateX = -currentProductSlide * (100 / slidesToShow);
            container.style.transform = `translateX(${translateX}%)`;
        }
        
        function nextProductSlide() {
            if (currentProductSlide < maxSlide) {
                currentProductSlide++;
            } else {
                currentProductSlide = 0;
            }
            updateProductSlider();
        }
        
        function prevProductSlide() {
            if (currentProductSlide > 0) {
                currentProductSlide--;
            } else {
                currentProductSlide = maxSlide;
            }
            updateProductSlider();
        }
        
        // Event listeners
        nextBtn.addEventListener('click', nextProductSlide);
        prevBtn.addEventListener('click', prevProductSlide);
        
        // Auto slide
        setInterval(nextProductSlide, 5000);
        
        // Responsive
        window.addEventListener('resize', () => {
            const newSlidesToShow = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            if (newSlidesToShow !== slidesToShow) {
                currentProductSlide = 0;
                updateProductSlider();
            }
        });
    }
    
    // Inicializar cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        initLandingHeroSlider();
        initProductSlider();
        initScrollAnimations();
        initSmoothScroll();
        initParallax();
        
        // Pequeño delay para las animaciones iniciales
        setTimeout(function() {
            document.body.classList.add('loaded');
        }, 100);
    });
</script>
@endsection

@push('styles')
<style>
.font-display { 
    font-family: 'Arial Black', Arial, sans-serif; 
    font-weight: normal; /* Arial Black ya es bold */
}

.font-body { 
    font-family: Arial, sans-serif; 
}
    .floating {
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-delayed {
        animation: float 6s ease-in-out infinite;
        animation-delay: -2s;
    }
    
    .floating-slow {
        animation: float 8s ease-in-out infinite;
        animation-delay: -4s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    .blob-1 {
        background: linear-gradient(45deg, #fbbf24, #f59e0b);
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        animation: morphing 8s ease-in-out infinite;
    }
    
    .blob-2 {
        background: linear-gradient(45deg, #f97316, #ea580c);
        border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
        animation: morphing 10s ease-in-out infinite;
        animation-delay: -2s;
    }
    
    @keyframes morphing {
        0%, 100% { 
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            transform: translateX(0) translateY(0) rotate(0deg);
        }
        25% { 
            border-radius: 30% 60% 40% 70% / 50% 40% 60% 30%;
            transform: translateX(10px) translateY(-15px) rotate(90deg);
        }
        50% { 
            border-radius: 70% 30% 60% 40% / 40% 70% 30% 60%;
            transform: translateX(-10px) translateY(10px) rotate(180deg);
        }
        75% { 
            border-radius: 40% 70% 30% 60% / 60% 30% 70% 40%;
            transform: translateX(15px) translateY(-5px) rotate(270deg);
        }
    }
    
    .gradient-overlay {
        background: linear-gradient(135deg, rgba(251, 191, 36, 0.1) 0%, rgba(249, 115, 22, 0.1) 100%);
    }
    
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }
    
    .reveal-on-scroll.revealed {
        opacity: 1;
        transform: translateY(0);
    }
    
    .bento-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .bento-card:hover {
        transform: translateY(-8px) scale(1.02);
    }
    
    .slider-image {
        transition: opacity 1s ease-in-out;
    }
    
    .slider-image.active {
        opacity: 1;
    }
    
    .slider-image:not(.active) {
        opacity: 0;
    }
    
    /* Estilos para el slider profesional */
    .slider-image {
        opacity: 0;
        transform: scale(1.05);
        transition: all 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .slider-image.active {
        opacity: 1;
        transform: scale(1);
    }
    
    .slide-content {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
        pointer-events: none;
    }
    
    .slide-content.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }
    
    .slide-content h2 {
        font-size: 3rem;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }
    
    .slide-content p {
        font-size: 1.25rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    
    @media (min-width: 1024px) {
        .slide-content h2 {
            font-size: 4.5rem;
        }
        
        .slide-content p {
            font-size: 1.5rem;
        }
    }
    
    /* Estilos para el nuevo slider moderno */
    .slide-item {
        transition: opacity 0.8s ease-in-out;
    }
    
    .slider-dot {
        transition: all 0.3s ease;
    }
    
    .slider-dot.active {
        background-color: white !important;
        transform: scale(1.2);
    }
    
    .slider-dot:hover {
        transform: scale(1.1);
    }
    
    /* Animaciones para el contenido del slider */
    .slide-item[data-slide="0"] .text-white h1 {
        animation: slideInLeft 1s ease-out 0.3s both;
    }
    
    .slide-item[data-slide="0"] .text-white p {
        animation: slideInLeft 1s ease-out 0.6s both;
    }
    
    .slide-item[data-slide="0"] .flex.flex-wrap {
        animation: slideInLeft 1s ease-out 0.9s both;
    }
    
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    /* Efectos de hover para las flechas */
    #prev-slide:hover, #next-slide:hover {
        transform: translateY(-50%) scale(1.1);
    }
    
    /* Animación de entrada para el contenido */
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .slide-content.active h2 {
        animation: slideInUp 0.8s ease-out 0.2s both;
        z-index: 10;
    }
    
    .slide-content.active p {
        animation: slideInUp 0.8s ease-out 0.4s both;
        z-index: 10;
    }
    
    /* Asegurar que el texto sea visible */
    .slide-content h2,
    .slide-content p {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        position: relative;
        z-index: 5;
    }
    
    /* Estilos para el slider de productos */
    .product-slider {
        position: relative;
        overflow: hidden;
    }
    
    .product-slide {
        transition: all 0.3s ease;
    }
    
    .product-slide:hover {
        transform: scale(1.02);
    }
    
    /* Responsive para el slider de productos */
    @media (max-width: 768px) {
        .product-slide {
            width: 100% !important;
        }
    }
    
    @media (min-width: 769px) and (max-width: 1023px) {
        .product-slide {
            width: 50% !important;
        }
    }
    
    @media (min-width: 1024px) {
        .product-slide {
            width: 33.333333% !important;
        }
    }
    
    /* Estilos para elementos con cuadrille */
    .cuadrille-pattern {
        background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    
    .cuadrille-texture {
        background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg');
        background-size: 200px 200px;
        background-repeat: repeat;
        opacity: 0.1;
    }
    
    /* Animación para elementos con cuadrille */
    .cuadrille-float {
        animation: cuadrilleFloat 8s ease-in-out infinite;
    }
    
    @keyframes cuadrilleFloat {
        0%, 100% { 
            transform: translateY(0px) rotate(0deg); 
        }
        25% { 
            transform: translateY(-10px) rotate(5deg); 
        }
        50% { 
            transform: translateY(-5px) rotate(-3deg); 
        }
        75% { 
            transform: translateY(-15px) rotate(2deg); 
        }
    }
</style>
@endpush
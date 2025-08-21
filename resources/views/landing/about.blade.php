@extends('landing.layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Fondo con imagen --}}
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1920&q=80')"></div>
        
        {{-- Elementos decorativos flotantes --}}
        <div class="absolute top-20 left-10 w-20 h-20 blob-1 floating opacity-20"></div>
        <div class="absolute top-40 right-20 w-16 h-16 blob-2 floating-delayed opacity-20"></div>
        <div class="absolute bottom-20 left-20 w-12 h-12 blob-1 floating-slow opacity-15"></div>
        
        {{-- Contenido del hero --}}
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="font-display text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                Nuestra <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent">Historia</span>
            </h1>
            <p class="text-xl lg:text-2xl text-white/90 mb-8 font-light leading-relaxed">
                Más de tres décadas perfeccionando el arte de los dulces artesanales, creando momentos inolvidables y endulzando la vida de familias en todo Paraguay.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#historia" class="px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white font-semibold rounded-full shadow-2xl hover:scale-105 hover:shadow-orange-500/25 transition-all duration-300">
                    Conocer Nuestra Historia
                </a>
                <a href="#equipo" class="px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-full border border-white/20 hover:bg-white/20 hover:scale-105 transition-all duration-300">
                    Conocer Nuestro Equipo
                </a>
            </div>
        </div>
    </section>

    {{-- Historia de la empresa --}}
    <section id="historia" class="py-20 lg:py-32 gradient-overlay">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 reveal-on-scroll">
                    <h2 class="font-display text-4xl lg:text-6xl font-bold text-gray-800 mb-8 leading-tight">
                        <span class="text-orange-600">Tradición, calidad y compromiso</span><br>
                        con el sabor paraguayo
                    </h2>
                    <p class="text-xl lg:text-2xl text-gray-600 font-light leading-relaxed max-w-4xl mx-auto">
                        Dul-Cesar ICSA, empresa Paraguaya con más de 40 años de trayectoria, dedicada a la producción, fraccionamiento, envasado, distribución e importación de productos alimenticios.
                    </p>
                </div>

                {{-- Grid de historia --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="reveal-on-scroll">
                        <h3 class="font-display text-3xl font-bold text-gray-800 mb-6">Nuestros Orígenes</h3>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            En el año 1982, en un pequeño hogar, bajo la sombra de un árbol de mango nacía una pasión impulsada por una visión clara: Ofrecer productos alimenticios, elaborados con dedicación, respeto por la tradición y un profundo compromiso.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Así surgió Dul-Cesar, una marca que con el paso del tiempo se consolidó como referente en la industria nacional de alimentos. La mermelada de guayaba tradicional fue el primer producto en salir al mercado, rápidamente conquistó los hogares paraguayos por su sabor auténtico y su calidad constante.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Más de 40 años</h4>
                                <p class="text-gray-600">De experiencia y tradición</p>
                            </div>
                        </div>
                    </div>
                    <div class="reveal-on-scroll">
                        <div class="relative">
                            <div class="bg-gradient-to-br from-orange-400 to-amber-500 rounded-3xl p-8 text-white shadow-2xl">
                                <h4 class="font-display text-2xl font-bold mb-4">Nuestros Valores</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold">Tradición</h5>
                                            <p class="text-white/90 text-sm">Preservamos las recetas ancestrales</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold">Calidad</h5>
                                            <p class="text-white/90 text-sm">Solo ingredientes de la mejor calidad</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold">Innovación</h5>
                                            <p class="text-white/90 text-sm">Adaptamos las recetas a los tiempos modernos</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start space-x-3">
                                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold">Familia</h5>
                                            <p class="text-white/90 text-sm">Cada producto está hecho con amor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Línea de tiempo --}}
    <section class="py-20 lg:py-32 bg-gradient-to-br from-orange-50 to-amber-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h3 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Nuestra <span class="text-orange-600">Evolución</span>
                </h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Más de cuatro décadas de crecimiento, innovación y compromiso con la excelencia
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    {{-- Línea central --}}
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-orange-200 h-full"></div>
                    
                    {{-- Hitos --}}
                    <div class="space-y-12">
                        {{-- 1982 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white rounded-2xl p-6 shadow-xl">
                                    <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">1982</h4>
                                    <h5 class="font-semibold text-orange-600 mb-2">Fundación de Dul-Cesar</h5>
                                    <p class="text-gray-600">Nacimos en un pequeño hogar bajo la sombra de un árbol de mango, con la visión de ofrecer productos alimenticios elaborados con dedicación y respeto por la tradición.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        {{-- 1985 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8"></div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-white rounded-2xl p-6 shadow-xl">
                                    <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">1985</h4>
                                    <h5 class="font-semibold text-orange-600 mb-2">Primeros Productos</h5>
                                    <p class="text-gray-600">La mermelada de guayaba tradicional conquistó los hogares paraguayos, seguida por el dulce de mamón y dulce de batata tradicional.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 1990 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white rounded-2xl p-6 shadow-xl">
                                    <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">1990</h4>
                                    <h5 class="font-semibold text-orange-600 mb-2">Crecimiento y Expansión</h5>
                                    <p class="text-gray-600">Con el liderazgo de Anibal Ramón Zimardi y Ana Maria Riveros de Zimardi, Dul-Cesar creció con paso firme, apostando a la mejora continua.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        {{-- 2000 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8"></div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-white rounded-2xl p-6 shadow-xl">
                                    <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">2000</h4>
                                    <h5 class="font-semibold text-orange-600 mb-2">Expansión del Portafolio</h5>
                                    <p class="text-gray-600">Ampliamos nuestra gama de productos incluyendo mermeladas, dulces, aderezos, salsas, vinagres y más productos alimenticios.</p>
                                </div>
                            </div>
                        </div>

                        {{-- 2010 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-white rounded-2xl p-6 shadow-xl">
                                    <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">2010</h4>
                                    <h5 class="font-semibold text-orange-600 mb-2">200+ Productos</h5>
                                    <p class="text-gray-600">Alcanzamos más de 200 productos en nuestro catálogo, abasteciendo puntos de venta en todo Paraguay con el objetivo de ganar el corazón de los consumidores.</p>
                                </div>
                            </div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        {{-- 2025 --}}
                        <div class="flex items-center reveal-on-scroll">
                            <div class="w-1/2 pr-8"></div>
                            <div class="w-8 h-8 bg-orange-500 rounded-full border-4 border-white shadow-lg z-10"></div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-2xl p-6 shadow-xl text-white">
                                    <h4 class="font-display text-2xl font-bold mb-2">2025</h4>
                                    <h5 class="font-semibold mb-2">Presente y Futuro</h5>
                                    <p class="text-white/90">Continuamos proyectándonos con una identidad renovada y un enfoque estratégico orientado a mercados más exigentes, sin perder nuestra esencia familiar ni nuestra raíz profundamente paraguaya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sección adicional con más detalles de la historia --}}
    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                {{-- Sección de fundadores --}}
                <div class="mb-20 reveal-on-scroll">
                    <div class="bg-gradient-to-r from-orange-50 to-amber-50 rounded-3xl p-8 lg:p-12">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                            <div>
                                <h3 class="font-display text-3xl font-bold text-gray-800 mb-6">El Liderazgo de Nuestros Fundadores</h3>
                                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                                    Con el liderazgo de los fundadores, <strong>Anibal Ramón Zimardi</strong> y <strong>Ana Maria Riveros de Zimardi</strong>, impulsando el inicio con sus labores. Dul-Cesar fue creciendo con paso firme, apostando a la mejora continua, la expansión del portafolio y la inversión en procesos productivos eficientes y sostenibles.
                                </p>
                                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                                    Lo que comenzó como un pequeño emprendimiento hoy es una empresa con más de <strong>200 productos</strong> en el catálogo, abasteciendo puntos de venta con el objetivo de ganar el corazón de los consumidores.
                                </p>
                            </div>
                            <div class="text-center">
                                <div class="w-32 h-32 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                    </svg>
                                </div>
                                <h4 class="font-display text-2xl font-bold text-gray-800 mb-2">Fundadores</h4>
                                <p class="text-gray-600">Anibal Ramón Zimardi</p>
                                <p class="text-gray-600">Ana Maria Riveros de Zimardi</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sección de productos y compromiso --}}
                <div class="mb-20 reveal-on-scroll">
                    <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl">
                        <h3 class="font-display text-3xl font-bold text-gray-800 mb-6 text-center">Nuestro Compromiso Actual</h3>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8 text-center max-w-4xl mx-auto">
                            Actualmente, Dul-Cesar ofrece una amplia gama de alimentos que incluyen mermeladas, dulces, aderezos, salsas, vinagres y más productos que buscan simplificar la vida del consumidor, manteniendo como prioridad el equilibrio entre innovación, sabor y respeto por los valores que nos dieron origen.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                            <div class="p-6 bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">200+ Productos</h4>
                                <p class="text-gray-600 text-sm">En nuestro catálogo actual</p>
                            </div>
                            <div class="p-6 bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Calidad Garantizada</h4>
                                <p class="text-gray-600 text-sm">Estándares internacionales</p>
                            </div>
                            <div class="p-6 bg-gradient-to-br from-orange-100 to-amber-100 rounded-2xl">
                                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Presencia Nacional</h4>
                                <p class="text-gray-600 text-sm">En todo Paraguay</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sección final de la historia --}}
                <div class="reveal-on-scroll">
                    <div class="bg-gradient-to-r from-orange-500 to-amber-500 rounded-3xl p-8 lg:p-12 text-white text-center">
                        <h3 class="font-display text-3xl font-bold mb-6">Nuestra Visión de Futuro</h3>
                        <p class="text-lg leading-relaxed mb-6 max-w-4xl mx-auto">
                            A lo largo de más de 40 años de trayectoria, hemos logrado consolidar un modelo de gestión que combina tradición y tecnología, priorizando la seguridad alimentaria, el desarrollo de proveedores locales y el fortalecimiento de vínculos con nuestros clientes, tanto a nivel nacional como internacional.
                        </p>
                        <p class="text-lg leading-relaxed mb-8 max-w-4xl mx-auto">
                            Hoy, Dul-Cesar continúa proyectándose con una identidad renovada y un enfoque estratégico orientado a mercados más exigentes, sin perder su esencia familiar ni su raíz profundamente paraguaya.
                        </p>
                        <div class="bg-white/20 backdrop-blur-md rounded-2xl p-6 inline-block">
                            <p class="text-xl font-semibold">
                                Porque en cada frasco, en cada envase y en cada sabor, seguimos transmitiendo lo que nos mueve desde el primer día: el deseo de llevar a la mesa de cada hogar <span class="text-yellow-300">#Dulcesmomentos</span>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Compromiso con la calidad --}}
    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 reveal-on-scroll">
                    <h3 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                        Nuestro <span class="text-orange-600">Compromiso</span><br>
                        con la Calidad
                    </h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Cada producto que sale de nuestras instalaciones pasa por rigurosos controles de calidad, garantizando la excelencia en cada bocado.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Proceso 1 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Selección de Ingredientes</h4>
                        <p class="text-gray-600 leading-relaxed">Trabajamos únicamente con proveedores certificados y seleccionamos los mejores ingredientes naturales para garantizar la calidad de nuestros productos.</p>
                    </div>

                    {{-- Proceso 2 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4zM4 9a1 1 0 000 2v5a2 2 0 002 2h8a2 2 0 002-2v-5a1 1 0 100-2H4z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Procesos Artesanales</h4>
                        <p class="text-gray-600 leading-relaxed">Mantenemos las técnicas tradicionales de elaboración, combinándolas con tecnología moderna para asegurar consistencia y calidad.</p>
                    </div>

                    {{-- Proceso 3 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Control de Calidad</h4>
                        <p class="text-gray-600 leading-relaxed">Cada lote de producción pasa por múltiples controles de calidad, desde la recepción de materias primas hasta el producto final.</p>
                    </div>

                    {{-- Proceso 4 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Innovación Continua</h4>
                        <p class="text-gray-600 leading-relaxed">Constantemente investigamos y desarrollamos nuevos productos, adaptándonos a las tendencias y necesidades del mercado.</p>
                    </div>

                    {{-- Proceso 5 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Equipo Capacitado</h4>
                        <p class="text-gray-600 leading-relaxed">Nuestro personal recibe capacitación continua en seguridad alimentaria, procesos de calidad y nuevas tecnologías.</p>
                    </div>

                    {{-- Proceso 6 --}}
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-amber-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                            </svg>
                        </div>
                        <h4 class="font-display text-xl font-bold text-gray-800 mb-4">Certificaciones</h4>
                        <p class="text-gray-600 leading-relaxed">Contamos con todas las certificaciones necesarias: ISO 9001, HACCP, y cumplimos con las normativas sanitarias nacionales e internacionales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Equipo y Planta --}}
    <section id="equipo" class="py-20 lg:py-32 bg-gradient-to-br from-orange-50 to-amber-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h3 class="font-display text-4xl lg:text-5xl font-bold text-gray-800 mb-6">
                    Nuestro <span class="text-orange-600">Equipo</span><br>
                    y Nuestras <span class="text-orange-600">Instalaciones</span>
                </h3>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Detrás de cada producto hay un equipo comprometido y instalaciones modernas que garantizan la más alta calidad.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                {{-- Información del equipo --}}
                <div class="reveal-on-scroll">
                    <h4 class="font-display text-3xl font-bold text-gray-800 mb-6">El Corazón de DulCesar</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Nuestro equipo está compuesto por más de 50 profesionales apasionados, cada uno especializado en su área pero unidos por el mismo objetivo: crear productos excepcionales que endulcen momentos especiales.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Desde nuestros maestros artesanos hasta nuestro personal administrativo, todos compartimos la misma pasión por la calidad y el compromiso con nuestros clientes.
                    </p>
                    
                    {{-- Estadísticas --}}
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-2">50+</div>
                            <div class="text-gray-600">Profesionales</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-2">30+</div>
                            <div class="text-gray-600">Años de experiencia</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-2">100+</div>
                            <div class="text-gray-600">Productos</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-orange-600 mb-2">24/7</div>
                            <div class="text-gray-600">Compromiso</div>
                        </div>
                    </div>
                </div>

                {{-- Imagen del equipo --}}
                <div class="reveal-on-scroll">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-orange-400 to-amber-500 rounded-3xl p-8 text-white shadow-2xl">
                            <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden mb-6">
                                <div class="w-full h-64 bg-white/20 rounded-2xl flex items-center justify-center">
                                    <div class="text-center">
                                        <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                                        </svg>
                                        <p class="text-white/80">Foto del equipo DulCesar</p>
                                    </div>
                                </div>
                            </div>
                            <h5 class="font-display text-xl font-bold mb-2">Nuestro Equipo</h5>
                            <p class="text-white/90">Profesionales apasionados por la excelencia y la tradición artesanal.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Instalaciones --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Planta principal --}}
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="aspect-w-16 aspect-h-9 rounded-t-2xl overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 mx-auto mb-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                                </svg>
                                <p class="text-gray-600">Planta Principal</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-display text-xl font-bold text-gray-800 mb-2">Planta Principal</h5>
                        <p class="text-gray-600 text-sm">Nuestras instalaciones principales en San Lorenzo, donde se elaboran la mayoría de nuestros productos artesanales.</p>
                    </div>
                </div>

                {{-- Laboratorio --}}
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="aspect-w-16 aspect-h-9 rounded-t-2xl overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 mx-auto mb-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <p class="text-gray-600">Laboratorio</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-display text-xl font-bold text-gray-800 mb-2">Laboratorio de Calidad</h5>
                        <p class="text-gray-600 text-sm">Equipado con tecnología de vanguardia para garantizar la calidad y seguridad de todos nuestros productos.</p>
                    </div>
                </div>

                {{-- Almacén --}}
                <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 reveal-on-scroll">
                    <div class="aspect-w-16 aspect-h-9 rounded-t-2xl overflow-hidden">
                        <div class="w-full h-48 bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-12 h-12 mx-auto mb-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                </svg>
                                <p class="text-gray-600">Almacén</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="font-display text-xl font-bold text-gray-800 mb-2">Almacén y Logística</h5>
                        <p class="text-gray-600 text-sm">Sistema de almacenamiento moderno que garantiza la frescura y calidad de nuestros productos durante todo el proceso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Llamado a la acción --}}
    <section class="py-20 lg:py-32 bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 relative overflow-hidden">
        {{-- Elementos decorativos --}}
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl floating"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-white/10 rounded-full blur-xl floating-delayed"></div>
        
        <div class="container mx-auto px-4 lg:px-8 text-center relative z-10">
            <div class="max-w-4xl mx-auto reveal-on-scroll">
                <h6 class="font-display text-4xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                    ¿Querés conocer más<br>
                    <span class="text-yellow-300">sobre nosotros?</span>
                </h6>
                <p class="text-xl lg:text-2xl text-white/90 mb-12 font-light">
                    Visitá nuestras instalaciones o contactanos para conocer más sobre nuestra historia y procesos
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="/contacto" class="px-10 py-5 bg-white text-orange-600 font-bold text-lg rounded-full shadow-2xl hover:scale-105 hover:shadow-white/25 transition-all duration-300 hover:bg-gray-50">
                        Contactanos
                    </a>
                    <a href="/productos" class="px-10 py-5 bg-transparent border-2 border-white text-white font-bold text-lg rounded-full hover:bg-white hover:text-orange-600 hover:scale-105 transition-all duration-300">
                        Ver Productos
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
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
        
        // Inicializar todo
        document.addEventListener('DOMContentLoaded', function() {
            initScrollAnimations();
            initSmoothScroll();
            initParallax();
            
            // Pequeño delay para las animaciones iniciales
            setTimeout(function() {
                document.body.classList.add('loaded');
            }, 100);
        });
    </script>
@endpush

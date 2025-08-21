@extends('landing.layouts.app')

@section('content')
<style>
    .flyer-card {
        background: linear-gradient(135deg, #fff 0%, #fefefe 100%);
        border: 1px solid rgba(234, 88, 12, 0.1);
    }
    .flyer-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px -12px rgba(234, 88, 12, 0.15);
    }
    .recipe-badge {
        background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
    }
    .ingredient-item {
        background: linear-gradient(135deg, #fff7ed 0%, #fed7aa 30%);
        border-left: 3px solid #ea580c;
    }
    .step-number {
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 14px;
        margin-right: 12px;
        flex-shrink: 0;
    }
    .category-tab {
        transition: all 0.3s ease;
    }
    .category-tab.active {
        background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
        color: white;
    }
    .video-thumbnail {
        background: linear-gradient(135deg, #fed7aa 0%, #fdba74 100%);
    }
    .tip-card {
        background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
        border-left: 4px solid #f59e0b;
    }
</style>

{{-- Hero Section --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-orange-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16 reveal-on-scroll">
            <h1 class="font-display text-4xl lg:text-6xl font-bold text-gray-800 mb-6">
                Blog & <span class="text-orange-600">Recetario</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Descubre recetas deliciosas, tips de cocina, consejos nutricionales y las últimas novedades con nuestros productos Dul-Cesar
            </p>
        </div>

        {{-- Filtros de Categoría --}}
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="category-tab active px-6 py-3 rounded-full border-2 border-orange-600 font-semibold">
                Todas
            </button>
            <button class="category-tab px-6 py-3 rounded-full border-2 border-orange-600 font-semibold text-orange-600 hover:bg-orange-600 hover:text-white">
                Recetas
            </button>
            <button class="category-tab px-6 py-3 rounded-full border-2 border-orange-600 font-semibold text-orange-600 hover:bg-orange-600 hover:text-white">
                Tips de Cocina
            </button>
            <button class="category-tab px-6 py-3 rounded-full border-2 border-orange-600 font-semibold text-orange-600 hover:bg-orange-600 hover:text-white">
                Novedades
            </button>
            <button class="category-tab px-6 py-3 rounded-full border-2 border-orange-600 font-semibold text-orange-600 hover:bg-orange-600 hover:text-white">
                Nutrición
            </button>
        </div>
    </div>
</section>

{{-- Contenido Principal --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            {{-- Grid de Contenido --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                {{-- Receta Destacada --}}
                <div class="lg:col-span-2">
                    <div class="flyer-card bg-white rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500">
                        {{-- Header del Flyer --}}
                        <div class="relative mb-6">
                            <div class="recipe-badge absolute top-4 right-4 px-4 py-2 rounded-full text-white font-bold text-sm z-10">
                                RECETA DESTACADA
                            </div>
                            <div class="w-full h-64 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-3xl font-bold text-gray-800">Torta de Chocolate Premium</h3>
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
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
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
                                    <div class="ingredient-item pl-4 py-2 rounded">
                                        Mantequilla - 100g
                                    </div>
                                    <div class="ingredient-item pl-4 py-2 rounded">
                                        Leche - 120ml
                                    </div>
                                </div>
                            </div>

                            {{-- Pasos --}}
                            <div>
                                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                                    <svg class="w-5 h-5 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Preparación
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="step-number">1</div>
                                        <p class="text-gray-700">Precalienta el horno a 180°C y engrasa un molde redondo</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="step-number">2</div>
                                        <p class="text-gray-700">Mezcla el cacao Dul-Cesar con la harina y el azúcar</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="step-number">3</div>
                                        <p class="text-gray-700">Incorpora los huevos batidos y la mantequilla derretida</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="step-number">4</div>
                                        <p class="text-gray-700">Agrega la leche gradualmente hasta obtener una masa homogénea</p>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="step-number">5</div>
                                        <p class="text-gray-700">Hornea por 35-40 minutos hasta que al insertar un palillo salga limpio</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Footer --}}
                            <div class="border-t pt-4 flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        45 min
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        8 porciones
                                    </div>
                                </div>
                                <div class="text-orange-600 font-bold text-lg">#DulCesarRecetas</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="space-y-8">
                    
                    {{-- Video Tutorial --}}
                    <div class="bg-white rounded-3xl p-6 shadow-xl">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <svg class="w-6 h-6 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293H15M9 10v4a1 1 0 001 1h4M9 10V9a1 1 0 011-1h4a1 1 0 011 1v1M9 10H8a1 1 0 00-1 1v3a1 1 0 001 1h1m0-5h4"></path>
                            </svg>
                            Video Tutorial
                        </h3>
                        <div class="video-thumbnail rounded-2xl h-32 flex items-center justify-center mb-4">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Cómo hacer galletas perfectas</h4>
                        <p class="text-sm text-gray-600 mb-3">Aprende los secretos para hacer galletas crujientes con nuestros productos.</p>
                        <div class="text-xs text-gray-500">Duración: 5:30 min</div>
                    </div>

                    {{-- Tip de Cocina --}}
                    <div class="tip-card rounded-3xl p-6 shadow-lg">
                        <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                            <svg class="w-5 h-5 text-yellow-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            Tip del Chef
                        </h3>
                        <p class="text-gray-700 font-medium mb-2">💡 Conservación del Cacao</p>
                        <p class="text-sm text-gray-600">Guarda tu cacao Dul-Cesar en un lugar fresco y seco, lejos de la luz directa. Así mantendrá su sabor y propiedades por más tiempo.</p>
                    </div>

                    {{-- Novedad --}}
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-3xl p-6 shadow-xl text-white">
                        <div class="flex items-center mb-3">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                            <h3 class="text-lg font-bold">¡Nuevo Producto!</h3>
                        </div>
                        <h4 class="font-bold mb-2">Cacao Premium Orgánico</h4>
                        <p class="text-sm opacity-90 mb-3">Descubre nuestro nuevo cacao 100% orgánico, cultivado de manera sostenible.</p>
                        <button class="bg-white text-orange-600 px-4 py-2 rounded-full font-semibold text-sm hover:bg-gray-100 transition-colors">
                            Conocer más
                        </button>
                    </div>
                </div>
            </div>

            {{-- Más Recetas --}}
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Más Recetas Populares</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    {{-- Receta 1 --}}
                    <div class="flyer-card bg-white rounded-3xl p-6 shadow-xl hover:shadow-orange-500/10 transition-all duration-500">
                        <div class="w-full h-40 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center mb-4">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Galletas de Avena</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Deliciosas galletas crujientes con avena y azúcar Dul-Cesar</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>⏱️ 25 min</span>
                            <span>👥 12 galletas</span>
                        </div>
                    </div>

                    {{-- Receta 2 --}}
                    <div class="flyer-card bg-white rounded-3xl p-6 shadow-xl hover:shadow-orange-500/10 transition-all duration-500">
                        <div class="w-full h-40 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center mb-4">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Muffins de Chocolate</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Esponjosos muffins con chips de chocolate y cacao premium</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>⏱️ 30 min</span>
                            <span>👥 12 muffins</span>
                        </div>
                    </div>

                    {{-- Receta 3 --}}
                    <div class="flyer-card bg-white rounded-3xl p-6 shadow-xl hover:shadow-orange-500/10 transition-all duration-500">
                        <div class="w-full h-40 bg-gradient-to-br from-orange-200 to-orange-300 rounded-2xl flex items-center justify-center mb-4">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-2">
                                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800">Brownies Clásicos</h3>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">Brownies húmedos y chocolatosos, perfectos para cualquier ocasión</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>⏱️ 40 min</span>
                            <span>👥 16 porciones</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Consejos Nutricionales --}}
            <div class="mt-16 bg-gradient-to-r from-green-50 to-blue-50 rounded-3xl p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Consejos Nutricionales</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Beneficios del Cacao</h3>
                        <p class="text-sm text-gray-600">Rico en antioxidantes, mejora el estado de ánimo y protege el corazón.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Energía Natural</h3>
                        <p class="text-sm text-gray-600">Nuestro azúcar proporciona energía rápida para tus actividades diarias.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Moderación</h3>
                        <p class="text-sm text-gray-600">Disfruta nuestros productos como parte de una dieta equilibrada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Scripts para interactividad --}}
<script>
document.addEventListener('DOMContentLoaded', function() {


    document.querySelectorAll('.reveal-on-scroll').forEach(el => {
            el.style.opacity = 1;
            el.style.transform = "translateY(0)";
        });
    // Funcionalidad de tabs de categorías
    const categoryTabs = document.querySelectorAll('.category-tab');
    
    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remover clase active de todos los tabs
            categoryTabs.forEach(t => t.classList.remove('active'));
            categoryTabs.forEach(t => {
                t.classList.add('text-orange-600');
                t.classList.remove('text-white');
            });
            
            // Agregar clase active al tab clickeado
            this.classList.add('active');
            this.classList.remove('text-orange-600');
            this.classList.add('text-white');
        });
    });

    

    // Animación de hover para las cards
    const flyerCards = document.querySelectorAll('.flyer-card');
    
    flyerCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Efecto de aparición en scroll
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

    // Aplicar observer a elementos que necesiten animación
    const animatedElements = document.querySelectorAll('.flyer-card, .tip-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

</script>

@endsection
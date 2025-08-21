@extends('ecommerce.layouts.app')

@section('content')
<!-- Hero Slider Profesional (no pantalla completa) -->
<section class="relative bg-gradient-to-br from-orange-400 via-red-500 to-pink-500 text-white py-12 lg:py-16 overflow-hidden">
    <div class="container mx-auto px-4 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-10 items-center">
            <!-- Slider -->
            <div>
                <div id="ecom-slider" class="relative overflow-hidden rounded-3xl shadow-2xl bg-white/10 backdrop-blur-sm h-72 lg:h-80">
                    <!-- Slides -->
                    <div class="ecom-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                        <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                            <span class="text-xs lg:text-sm">Desde 1982</span>
        </div>
                        <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Mermeladas Artesanales</h2>
                        <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Sabores únicos elaborados con frutas seleccionadas y recetas familiares.</p>
                        <div class="mt-5">
                            <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Ver productos</a>
                    </div>
                    </div>

                    <div class="ecom-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                        <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                            <span class="text-xs lg:text-sm">Calidad Premium</span>
                </div>
                        <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Jugos Naturales</h2>
                        <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Frescura en cada sorbo, sin atajos.</p>
                        <div class="mt-5">
                            <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Explorar</a>
                        </div>
                    </div>

                    <div class="ecom-slide absolute inset-0 opacity-0 transition-opacity duration-700 p-8 lg:p-10 flex flex-col justify-center">
                        <div class="inline-flex items-center bg-white/20 rounded-full px-5 py-2 border border-white/30 w-fit mb-3">
                            <span class="text-xs lg:text-sm">Novedades</span>
                    </div>
                        <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight drop-shadow">Aderezos y Salsas</h2>
                        <p class="mt-2 text-white/90 text-sm lg:text-base max-w-xl">Dale a tus comidas el toque Dul‑Cesar.</p>
                        <div class="mt-5">
                            <a href="#productos" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl shadow hover:shadow-lg hover:-translate-y-0.5 transition">Ver más</a>
                        </div>
                    </div>

                    <!-- Controles -->
                    <button id="ecom-prev" class="hidden sm:flex absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-white/30 hover:bg-white/50 rounded-full items-center justify-center transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button id="ecom-next" class="hidden sm:flex absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 bg-white/30 hover:bg-white/50 rounded-full items-center justify-center transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>

                    <!-- Dots -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                        <button class="ecom-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                        <button class="ecom-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                        <button class="ecom-dot w-2.5 h-2.5 rounded-full bg-white/50"></button>
                    </div>
                </div>
            </div>

            <!-- Césarito al lado -->
            <div class="relative flex items-end justify-center lg:justify-end">
                <img src="{{ asset('images/imagenes/cesarito 1.png') }}" alt="Cesarito Dul‑Cesar" class="w-56 sm:w-64 lg:w-80 drop-shadow-[0_25px_60px_rgba(0,0,0,0.45)] select-none">
    </div>
        </div>
    </div>
</section>


<!-- Productos -->
<section id="productos" class="py-14 lg:py-18">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filtros -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-2xl shadow-md p-5 lg:p-7 sticky top-24">
                    <h3 class="text-xl font-semibold text-gray-800 mb-5">Filtros</h3>
                    
                    <!-- Categorías -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Familias</h4>
                        <div class="space-y-3 max-h-72 overflow-y-auto pr-1">
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="aderezos" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Aderezos</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="granos" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Granos</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="jugos" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Jugos</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="mermeladas" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Mermeladas</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="mermeladas-light" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Mermeladas Light</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="mermeladas-zero" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Mermeladas Zero</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="navidena" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Navideña</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="reposteria" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Repostería</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="saludables" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Saludables</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="snacks" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Snacks</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="tradicional" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Tradicional</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="category-filter" value="zero" class="rounded border-gray-300 text-dulcesar-600 focus:ring-dulcesar-500">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Zero</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Precio -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Precio</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="price" value="0-10000" class="price-filter">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">$0 - $10.000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" value="10000-20000" class="price-filter">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">$10.000 - $20.000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" value="20000-50000" class="price-filter">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">$20.000 - $50.000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="price" value="50000+" class="price-filter">
                                <span class="ml-2 text-sm lg:text-base text-gray-600">Más de $50.000</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Ordenar por -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Ordenar por</h4>
                        <select id="sort-select" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm lg:text-base focus:ring-2 focus:ring-dulcesar-500 focus:border-transparent">
                            <option value="name">Nombre A-Z</option>
                            <option value="name-desc">Nombre Z-A</option>
                            <option value="price">Precio: Menor a Mayor</option>
                            <option value="price-desc">Precio: Mayor a Menor</option>
                            <option value="popular">Más Populares</option>
                        </select>
                    </div>
                    
                    <!-- Limpiar filtros -->
                    <button id="clear-filters" class="w-full bg-gray-100 text-gray-700 py-2.5 px-4 rounded-lg text-sm lg:text-base hover:bg-gray-200 transition-colors">
                        Limpiar Filtros
                    </button>
                </div>
            </div>
            
            <!-- Lista de productos -->
            <div class="lg:w-3/4">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 lg:mb-7 gap-4">
                    <h2 class="text-2xl lg:text-3xl font-display text-gray-800">Productos</h2>
                    <div class="flex items-center space-x-3 lg:space-x-4">
                        <span id="product-count" class="text-sm lg:text-base text-gray-600">12 productos</span>
                        <div class="flex items-center space-x-1 lg:space-x-2">
                            <button id="grid-view" class="p-2 lg:p-2.5 rounded-md bg-dulcesar-100 text-dulcesar-600">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z"/>
                                </svg>
                            </button>
                            <button id="list-view" class="p-2 lg:p-2.5 rounded-md text-gray-400 hover:text-dulcesar-600">
                                <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    <!-- Los productos se cargarán dinámicamente aquí -->
                </div>
                
                <!-- Paginación -->
                <div id="pagination" class="flex justify-center mt-10 lg:mt-14">
                    <nav class="flex items-center space-x-2 lg:space-x-3">
                        <button class="px-3 lg:px-4 py-2 lg:py-2.5 text-sm lg:text-base border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                            Anterior
                        </button>
                        <button class="px-3 lg:px-4 py-2 lg:py-2.5 text-sm lg:text-base bg-dulcesar-600 text-white rounded-lg">1</button>
                        <button class="px-3 lg:px-4 py-2 lg:py-2.5 text-sm lg:text-base border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-3 lg:px-4 py-2 lg:py-2.5 text-sm lg:text-base border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                        <button class="px-3 lg:px-4 py-2 lg:py-2.5 text-sm lg:text-base border border-gray-300 rounded-lg hover:bg-gray-50">
                            Siguiente
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ofertas especiales -->
<section id="ofertas" class="py-14 bg-dulcesar-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl lg:text-4xl font-display text-gray-800 mb-4">Ofertas Especiales</h2>
            <p class="text-gray-600 text-base lg:text-lg">Aprovecha nuestros descuentos por tiempo limitado</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Producto en oferta 1 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="{{ asset('images/imagenes/mermelada.jpg') }}" alt="Mermelada de Fresa" class="w-full h-56 lg:h-64 object-cover">
                    <div class="absolute top-3 left-3 lg:top-4 lg:left-4 bg-red-500 text-white px-3 lg:px-4 py-1.5 rounded-full text-xs lg:text-sm font-semibold shadow-md">
                        -20%
                    </div>
                </div>
                <div class="p-5 lg:p-7">
                    <h3 class="text-lg lg:text-xl font-semibold text-gray-800 mb-2">Mermelada de Fresa</h3>
                    <p class="text-gray-600 text-sm lg:text-base mb-3 lg:mb-4">Mermelada artesanal de fresas frescas</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg lg:text-xl font-bold text-dulcesar-600">$12.000</span>
                            <span class="text-sm lg:text-base text-gray-400 line-through">$15.000</span>
                        </div>
                        <button class="add-to-cart bg-dulcesar-600 text-white px-4 lg:px-5 py-2 lg:py-2.5 rounded-xl hover:bg-dulcesar-700 transition-colors text-sm lg:text-base" data-id="1">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Producto en oferta 2 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="{{ asset('images/imagenes/cuadrille tipo 1.jpeg.jpg') }}" alt="Dulce de Leche" class="w-full h-56 lg:h-64 object-cover">
                    <div class="absolute top-3 left-3 lg:top-4 lg:left-4 bg-red-500 text-white px-3 lg:px-4 py-1.5 rounded-full text-xs lg:text-sm font-semibold shadow-md">
                        -15%
                    </div>
                </div>
                <div class="p-5 lg:p-7">
                    <h3 class="text-lg lg:text-xl font-semibold text-gray-800 mb-2">Dulce de Leche</h3>
                    <p class="text-gray-600 text-sm lg:text-base mb-3 lg:mb-4">Dulce de leche artesanal tradicional</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg lg:text-xl font-bold text-dulcesar-600">$18.000</span>
                            <span class="text-sm lg:text-base text-gray-400 line-through">$21.000</span>
                        </div>
                        <button class="add-to-cart bg-dulcesar-600 text-white px-4 lg:px-5 py-2 lg:py-2.5 rounded-xl hover:bg-dulcesar-700 transition-colors text-sm lg:text-base" data-id="2">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Producto en oferta 3 -->
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-xl transition-shadow">
                <div class="relative">
                    <img src="{{ asset('images/imagenes/mermelada.jpg') }}" alt="Jalea de Mora" class="w-full h-56 lg:h-64 object-cover">
                    <div class="absolute top-3 left-3 lg:top-4 lg:left-4 bg-red-500 text-white px-3 lg:px-4 py-1.5 rounded-full text-xs lg:text-sm font-semibold shadow-md">
                        -25%
                    </div>
                </div>
                <div class="p-5 lg:p-7">
                    <h3 class="text-lg lg:text-xl font-semibold text-gray-800 mb-2">Jalea de Mora</h3>
                    <p class="text-gray-600 text-sm lg:text-base mb-3 lg:mb-4">Jalea natural de moras silvestres</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg lg:text-xl font-bold text-dulcesar-600">$9.000</span>
                            <span class="text-sm lg:text-base text-gray-400 line-through">$12.000</span>
                        </div>
                        <button class="add-to-cart bg-dulcesar-600 text-white px-4 lg:px-5 py-2 lg:py-2.5 rounded-xl hover:bg-dulcesar-700 transition-colors text-sm lg:text-base" data-id="3">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-gray-800 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-4xl font-display mb-4">¡Mantente Informado!</h2>
        <p class="text-gray-300 mb-8 max-w-2xl mx-auto text-base lg:text-lg">
            Suscríbete a nuestro newsletter para recibir ofertas exclusivas, nuevas recetas y noticias sobre nuestros productos artesanales.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
            <input type="email" 
                   placeholder="Tu correo electrónico" 
                   class="flex-1 px-5 py-3.5 rounded-xl text-gray-800 focus:ring-2 focus:ring-dulcesar-500 focus:outline-none">
            <button class="bg-dulcesar-600 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-dulcesar-700 transition-colors">
                Suscribirse
            </button>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@php
    $categoryDefinitions = [
        ['slug' => 'aderezos', 'dir' => 'images/imagenes/aderezos'],
        ['slug' => 'granos', 'dir' => 'images/imagenes/granos'],
        ['slug' => 'jugos', 'dir' => 'images/imagenes/jugos'],
        ['slug' => 'mermeladas', 'dir' => 'images/imagenes/mermeladas'],
    ];

    $productsData = [];
    $nextId = 1;

    foreach ($categoryDefinitions as $categoryDef) {
        $absolutePath = public_path($categoryDef['dir']);
        if (is_dir($absolutePath)) {
            foreach (\Illuminate\Support\Facades\File::files($absolutePath) as $file) {
                $filenameWithExtension = $file->getFilename();
                $nameWithoutExtension = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                $nameNormalized = trim(preg_replace('/\s+/', ' ', $nameWithoutExtension));

                // Categoría por defecto
                $categorySlug = $categoryDef['slug'];

                // Subcategorías para mermeladas: light y zero
                if ($categorySlug === 'mermeladas') {
                    $upper = mb_strtoupper($nameNormalized, 'UTF-8');
                    if (str_contains($upper, 'LIGHT')) {
                        $categorySlug = 'mermeladas-light';
                    } elseif (str_contains($upper, 'ZERO')) {
                        $categorySlug = 'mermeladas-zero';
                    }
                }

                // Precio base simple por familia
                $basePrice = match ($categoryDef['slug']) {
                    'mermeladas' => 15000,
                    'jugos' => 12000,
                    'aderezos' => 10000,
                    'granos' => 8000,
                    default => 10000,
                };

                $productsData[] = [
                    'id' => $nextId++,
                    'name' => $nameNormalized,
                    'description' => match ($categoryDef['slug']) {
                        'mermeladas' => 'Mermelada artesanal',
                        'jugos' => 'Jugo natural',
                        'granos' => 'Producto de granos',
                        'aderezos' => 'Aderezo y salsas',
                        default => 'Producto artesanal',
                    },
                    'price' => $basePrice,
                    'originalPrice' => $basePrice,
                    'category' => $categorySlug,
                    'image' => asset($categoryDef['dir'] . '/' . $filenameWithExtension),
                    'inStock' => true,
                    'rating' => 4.6,
                    'reviews' => 25,
                ];
            }
        }
    }
@endphp
<script>
// Slider profesional del hero (autoplay + dots + flechas)
function initEcomHeroSlider() {
    const slider = document.getElementById('ecom-slider');
    if (!slider) return;
    const slides = slider.querySelectorAll('.ecom-slide');
    const dots = slider.querySelectorAll('.ecom-dot');
    const prev = document.getElementById('ecom-prev');
    const next = document.getElementById('ecom-next');
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

    function nextSlide() {
        const idx = (current + 1) % slides.length;
        showSlide(idx);
    }
    function prevSlide() {
        const idx = (current - 1 + slides.length) % slides.length;
        showSlide(idx);
    }
    function startAuto() {
        stopAuto();
        timer = setInterval(nextSlide, 5000);
    }
    function stopAuto() {
        if (timer) clearInterval(timer);
    }

    dots.forEach((d, i) => d.addEventListener('click', () => { showSlide(i); startAuto(); }));
    if (next) next.addEventListener('click', () => { nextSlide(); startAuto(); });
    if (prev) prev.addEventListener('click', () => { prevSlide(); startAuto(); });

    slider.addEventListener('mouseenter', stopAuto);
    slider.addEventListener('mouseleave', startAuto);

    showSlide(0);
    startAuto();
}

// Datos de productos generados automáticamente desde /public/images/imagenes
const products = @json($productsData);

// Variables globales para la página de productos
let filteredProducts = [...products];
let currentView = 'grid';

// Inicialización
document.addEventListener('DOMContentLoaded', function() {
    renderProducts();
    setupEventListeners();
    initEcomHeroSlider();
});

// Configurar event listeners
function setupEventListeners() {
    // Filtros
    document.querySelectorAll('.category-filter, .price-filter').forEach(filter => {
        filter.addEventListener('change', filterProducts);
    });
    
    // Ordenamiento
    const sortSelect = document.getElementById('sort-select');
    if (sortSelect) {
        sortSelect.addEventListener('change', filterProducts);
    }
    
    // Vista
    const gridView = document.getElementById('grid-view');
    const listView = document.getElementById('list-view');
    if (gridView) gridView.addEventListener('click', () => setView('grid'));
    if (listView) listView.addEventListener('click', () => setView('list'));
    
    // Limpiar filtros
    const clearFilters = document.getElementById('clear-filters');
    if (clearFilters) {
        clearFilters.addEventListener('click', clearFiltersFunction);
    }
}

// Renderizar productos
function renderProducts() {
    const container = document.getElementById('products-grid');
    const countElement = document.getElementById('product-count');
    
    if (!container) return;
    
    if (countElement) {
        countElement.textContent = `${filteredProducts.length} productos`;
    }
    
    if (filteredProducts.length === 0) {
        container.innerHTML = `
            <div class="col-span-full text-center py-12">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.47-.881-6.08-2.33"></path>
                </svg>
                <p class="text-gray-500 text-lg">No se encontraron productos</p>
                <p class="text-gray-400">Intenta ajustar los filtros</p>
            </div>
        `;
        return;
    }
    
    container.innerHTML = filteredProducts.map(product => `
        <div class="product-card bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
            <div class="relative">
                <img src="${product.image}" alt="${product.name}" class="w-full h-40 lg:h-48 object-cover">
                ${product.originalPrice > product.price ? `
                    <div class="absolute top-2 left-2 lg:top-4 lg:left-4 bg-red-500 text-white px-2 lg:px-3 py-1 rounded-full text-xs lg:text-sm font-semibold">
                        -${Math.round((1 - product.price / product.originalPrice) * 100)}%
                    </div>
                ` : ''}
                <button class="absolute top-2 right-2 lg:top-4 lg:right-4 w-6 h-6 lg:w-8 lg:h-8 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-dulcesar-50 transition-colors">
                    <svg class="w-3 h-3 lg:w-4 lg:h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 lg:p-6">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-base lg:text-lg font-semibold text-gray-800">${product.name}</h3>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span class="text-xs lg:text-sm text-gray-600 ml-1">${product.rating}</span>
                    </div>
                </div>
                <p class="text-gray-600 text-xs lg:text-sm mb-3 lg:mb-4">${product.description}</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <span class="text-base lg:text-lg font-bold text-dulcesar-600">$${product.price.toLocaleString()}</span>
                        ${product.originalPrice > product.price ? `
                            <span class="text-xs lg:text-sm text-gray-400 line-through">$${product.originalPrice.toLocaleString()}</span>
                        ` : ''}
                    </div>
                    <button class="add-to-cart bg-dulcesar-600 text-white px-3 lg:px-4 py-1.5 lg:py-2 rounded-lg hover:bg-dulcesar-700 transition-colors text-xs lg:text-sm" data-id="${product.id}">
                        Agregar
                    </button>
                </div>
            </div>
        </div>
    `).join('');
    
    // Agregar event listeners a los botones de agregar al carrito
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productId = parseInt(this.dataset.id);
            addToCart(productId);
        });
    });
}

// Filtrar productos
function filterProducts() {
    const selectedCategories = Array.from(document.querySelectorAll('.category-filter:checked')).map(cb => cb.value);
    const selectedPrice = document.querySelector('input[name="price"]:checked')?.value;
    const sortSelect = document.getElementById('sort-select');
    const sortBy = sortSelect ? sortSelect.value : 'name';
    
    filteredProducts = products.filter(product => {
        // Filtro por categoría
        if (selectedCategories.length > 0 && !selectedCategories.includes(product.category)) {
            return false;
        }
        
        // Filtro por precio
        if (selectedPrice) {
            const [min, max] = selectedPrice.split('-').map(p => p === '+' ? Infinity : parseInt(p));
            if (product.price < min || (max !== Infinity && product.price > max)) {
                return false;
            }
        }
        
        return true;
    });
    
    // Ordenamiento
    filteredProducts.sort((a, b) => {
        switch (sortBy) {
            case 'name':
                return a.name.localeCompare(b.name);
            case 'name-desc':
                return b.name.localeCompare(a.name);
            case 'price':
                return a.price - b.price;
            case 'price-desc':
                return b.price - a.price;
            case 'popular':
                return b.reviews - a.reviews;
            default:
                return 0;
        }
    });
    
    renderProducts();
}

// Limpiar filtros
function clearFiltersFunction() {
    document.querySelectorAll('.category-filter, .price-filter').forEach(filter => {
        filter.checked = false;
    });
    const sortSelect = document.getElementById('sort-select');
    if (sortSelect) {
        sortSelect.value = 'name';
    }
    filteredProducts = [...products];
    renderProducts();
}

// Configurar vista
function setView(view) {
    currentView = view;
    const container = document.getElementById('products-grid');
    const gridBtn = document.getElementById('grid-view');
    const listBtn = document.getElementById('list-view');
    
    if (!container) return;
    
    if (view === 'grid') {
        container.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6';
        if (gridBtn) gridBtn.className = 'p-1.5 lg:p-2 rounded-md bg-dulcesar-100 text-dulcesar-600';
        if (listBtn) listBtn.className = 'p-1.5 lg:p-2 rounded-md text-gray-400 hover:text-dulcesar-600';
    } else {
        container.className = 'space-y-4';
        if (gridBtn) gridBtn.className = 'p-1.5 lg:p-2 rounded-md text-gray-400 hover:text-dulcesar-600';
        if (listBtn) listBtn.className = 'p-1.5 lg:p-2 rounded-md bg-dulcesar-100 text-dulcesar-600';
    }
    
    renderProducts();
}

// Funciones del carrito (usando la variable global del header)
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return;
    
    // Usar la función del carrito del header
    if (typeof addToCartHeader === 'function') {
        addToCartHeader(product);
    } else {
        // Fallback si no existe la función del header
        console.log('Producto agregado:', product.name);
        showNotification(`${product.name} agregado al carrito`);
    }
}

function showNotification(message) {
    // Crear notificación temporal
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    // Animar entrada
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Animar salida
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (document.body.contains(notification)) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}
</script>
@endpush


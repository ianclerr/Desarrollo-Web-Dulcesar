@extends('landing.layouts.app')

@section('title', 'Para Empresas y Distribuidores - Dul-Cesar')

@section('content')
{{-- Sección Para Empresas / Distribuidores --}}
<section class="py-20 lg:py-32 bg-gradient-to-br from-slate-900 via-orange-900 to-red-900 relative overflow-hidden">
    {{-- Elementos decorativos de fondo --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-orange-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-red-400 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-yellow-400 rounded-full blur-2xl"></div>
    </div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        {{-- Encabezado Principal --}}
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-orange-500/20 backdrop-blur-sm px-6 py-3 rounded-full border border-orange-300/30 mb-6">
                <svg class="w-5 h-5 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                </svg>
                <span class="text-orange-300 font-semibold">Oportunidades Comerciales</span>
            </div>
            
            <h1 class="font-display text-5xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300">
                    Únete a Nuestra
                </span><br>
                <span class="text-white">Red de Distribución</span>
            </h1>
            
            <p class="text-xl lg:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                Conviértete en nuestro socio comercial y accede a productos de calidad premium 
                con condiciones especiales para mayoristas y distribuidores
            </p>
        </div>

        {{-- Grid de Beneficios --}}
        <div class="grid lg:grid-cols-3 gap-8 mb-20">
            {{-- Beneficio 1 --}}
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-white mb-4">Precios Mayoristas</h3>
                <p class="text-gray-300 leading-relaxed">
                    Accede a precios especiales con descuentos progresivos según volúmenes de compra. 
                    Márgenes atractivos garantizados.
                </p>
            </div>

            {{-- Beneficio 2 --}}
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-white mb-4">Soporte Comercial</h3>
                <p class="text-gray-300 leading-relaxed">
                    Equipo dedicado de ventas, material promocional, capacitación de productos 
                    y apoyo en estrategias de marketing.
                </p>
            </div>

            {{-- Beneficio 3 --}}
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-bold text-white mb-4">Calidad Garantizada</h3>
                <p class="text-gray-300 leading-relaxed">
                    Productos con certificaciones de calidad, procesos artesanales tradicionales 
                    y garantía de frescura en cada entrega.
                </p>
            </div>
        </div>

        {{-- Sección Central de Acción --}}
        <div class="bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-md rounded-3xl p-12 lg:p-16 border border-orange-300/30 mb-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Contenido izquierdo --}}
                <div>
                    <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-6">
                        ¿Listo para <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300">Empezar?</span>
                    </h2>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Descarga nuestro catálogo mayorista completo con toda la información de productos, 
                        precios especiales y condiciones comerciales.
                    </p>
                    
                    {{-- Lista de beneficios --}}
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Catálogo completo con más de 200 productos
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Precios mayoristas actualizados
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Condiciones comerciales detalladas
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Información nutricional y certificaciones
                        </li>
                    </ul>
                </div>

                {{-- Contenido derecho - Formulario y botones --}}
                <div class="space-y-6">
                    {{-- Botón descargar catálogo --}}
                    <a href="#" onclick="downloadCatalog()" class="group relative w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-6 rounded-2xl font-bold text-lg text-center hover:from-orange-600 hover:to-red-600 transition-all duration-300 shadow-2xl hover:shadow-orange-500/50 transform hover:-translate-y-1 overflow-hidden block">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Descargar Catálogo Mayorista
                        </div>
                    </a>

                    {{-- Botón contacto ventas --}}
                    <a href="#" onclick="contactSales()" class="group relative w-full bg-transparent border-2 border-orange-400 text-orange-300 px-8 py-6 rounded-2xl font-bold text-lg text-center hover:bg-orange-500 hover:text-white hover:border-orange-500 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 block">
                        <div class="flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            Contactar Equipo de Ventas
                        </div>
                    </a>

                    {{-- WhatsApp Business --}}
                    <a href="https://wa.me/595123456789?text=Hola,%20estoy%20interesado%20en%20ser%20distribuidor%20de%20productos%20Dul-Cesar" target="_blank" class="group relative w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-6 rounded-2xl font-bold text-lg text-center hover:from-green-600 hover:to-green-700 transition-all duration-300 shadow-2xl hover:shadow-green-500/50 transform hover:-translate-y-1 block">
                        <div class="flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            WhatsApp Business
                        </div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Estadísticas --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300 mb-2">200+</div>
                <div class="text-gray-300 font-medium">Productos</div>
            </div>
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300 mb-2">50+</div>
                <div class="text-gray-300 font-medium">Distribuidores</div>
            </div>
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300 mb-2">15+</div>
                <div class="text-gray-300 font-medium">Años Experiencia</div>
            </div>
            <div class="text-center">
                <div class="text-4xl lg:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-300 to-yellow-300 mb-2">100%</div>
                <div class="text-gray-300 font-medium">Calidad</div>
            </div>
        </div>

        {{-- CTA Final --}}
        <div class="text-center">
            <p class="text-lg text-gray-300 mb-6">
                ¿Tienes preguntas? Nuestro equipo comercial está listo para ayudarte
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:ventas@dulcesar.com" class="inline-flex items-center text-orange-300 hover:text-orange-200 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    ventas@dulcesar.com
                </a>
                <a href="tel:+595123456789" class="inline-flex items-center text-orange-300 hover:text-orange-200 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    +595 123 456 789
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Modal de Formulario de Contacto --}}
<div id="contactModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-display text-2xl font-bold text-gray-800">Contacto Comercial</h3>
                <button onclick="closeContactModal()" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition-colors">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nombre de la Empresa</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all" placeholder="Tu empresa">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Persona de Contacto</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all" placeholder="Tu nombre">
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all" placeholder="email@empresa.com">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Teléfono</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all" placeholder="+595 xxx xxx xxx">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Tipo de Negocio</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all">
                        <option>Supermercado</option>
                        <option>Distribuidora</option>
                        <option>Restaurante</option>
                        <option>Panadería</option>
                        <option>Otros</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Mensaje</label>
                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 focus:outline-none transition-all resize-none" placeholder="Cuéntanos sobre tu interés en nuestros productos..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-orange-600 hover:to-red-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Enviar Solicitud
                </button>
            </form>
        </div>
    </div>
</div>
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
    
    // Funciones del modal
    function contactSales() {
        const modal = document.getElementById('contactModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    function closeContactModal() {
        const modal = document.getElementById('contactModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
    
    function downloadCatalog() {
        // Simular descarga del catálogo
        alert('Descargando catálogo mayorista...');
        // Aquí puedes agregar la lógica real de descarga
    }
    
    // Cerrar modal al hacer clic fuera
    document.addEventListener('DOMContentLoaded', function() {
        initScrollAnimations();
        
        const modal = document.getElementById('contactModal');
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeContactModal();
            }
        });
        
        // Cerrar con ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeContactModal();
            }
        });
    });
</script>
@endpush
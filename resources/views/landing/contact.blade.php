@extends('landing.layouts.app')

@section('content')

{{-- Sección de Contacto --}}
<section class="py-20 lg:py-32 relative overflow-hidden">
    {{-- Fondo principal con imagen de picnic --}}
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/picnicontacto.jpg')"></div>
    
    {{-- Overlay gradiente para mejorar legibilidad --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900/85 via-orange-900/80 to-red-900/85"></div>
    
    {{-- Elementos decorativos flotantes --}}
    <div class="absolute inset-0 overflow-hidden">
        {{-- Círculos decorativos con animación --}}
        <div class="absolute top-20 left-10 w-32 h-32 bg-orange-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-red-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-yellow-400/20 rounded-full blur-2xl animate-pulse" style="animation-delay: -4s;"></div>
        
        {{-- Elementos de picnic flotantes --}}
        <div class="absolute top-32 right-32 w-16 h-16 bg-white/10 rounded-full blur-lg animate-bounce" style="animation-delay: -1s;"></div>
        <div class="absolute bottom-32 left-32 w-12 h-12 bg-orange-300/20 rounded-full blur-lg animate-bounce" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-red-300/15 rounded-full blur-xl animate-ping" style="animation-delay: -2s;"></div>
        
        {{-- Líneas decorativas --}}
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-orange-400/30 to-transparent"></div>
        <div class="absolute bottom-0 right-0 w-full h-1 bg-gradient-to-l from-transparent via-red-400/30 to-transparent"></div>
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-transparent via-yellow-400/30 to-transparent"></div>
        <div class="absolute top-0 right-0 w-1 h-full bg-gradient-to-b from-transparent via-orange-400/30 to-transparent"></div>
    </div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        {{-- Encabezado --}}
        <div class="text-center mb-16 reveal-on-scroll">
            <div class="inline-flex items-center bg-white px-6 py-3 rounded-full border border-white/50 mb-6 animate-fade-in-up shadow-lg">
                <svg class="w-5 h-5 text-orange-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                <span class="text-gray-800 font-semibold">Contáctanos</span>
            </div>
            
            <h4 class="font-display text-4xl lg:text-6xl font-bold text-white mb-8 leading-tight animate-fade-in-up drop-shadow-2xl" style="animation-delay: 0.2s;">
                Nuestro <span class="text-red-600 drop-shadow-lg">Contacto</span>
            </h4>
            <p class="text-xl text-white max-w-2xl mx-auto leading-relaxed animate-fade-in-up font-medium drop-shadow-lg" style="animation-delay: 0.4s;">
                Contáctanos según tu necesidad específica. Tenemos un equipo especializado para cada área
            </p>
        </div>

        {{-- Tarjetas de Contacto --}}
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Televentas --}}
                <div class="contact-card relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.6s;">
                    {{-- Fondo cuadrille dentro del cuadro --}}
                    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                    {{-- Fondo blanco sólido --}}
                    <div class="absolute inset-0 bg-white"></div>
                    
                    <div class="text-center relative z-10">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6 icon-bounce">
                            <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h5 class="text-2xl font-bold text-red-600 mb-4">Televentas</h5>
                        <p class="text-gray-800 mb-6">Para consultas sobre productos y realizar pedidos</p>
                        <div class="space-y-3">
                            <a href="tel:+595123456789" class="block text-orange-600 hover:text-orange-700 font-semibold transition-colors">
                                📞 +595 123 456 789
                            </a>
                            <a href="mailto:ventas@empresa.com" class="block text-orange-600 hover:text-orange-700 font-semibold transition-colors">
                                ✉️ ventas@empresa.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Atención al Cliente --}}
                <div class="contact-card relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.8s;">
                    {{-- Fondo cuadrille dentro del cuadro --}}
                    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                    {{-- Fondo blanco sólido --}}
                    <div class="absolute inset-0 bg-white"></div>
                    
                    <div class="text-center relative z-10">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6 icon-bounce">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"></path>
                            </svg>
                        </div>
                        <h5 class="text-2xl font-bold text-red-600 mb-4">Atención al Cliente</h5>
                        <p class="text-gray-800 mb-6">Soporte técnico y resolución de consultas</p>
                        <div class="space-y-3">
                            <a href="tel:+595987654321" class="block text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                                📞 +595 987 654 321
                            </a>
                            <a href="mailto:atencion@empresa.com" class="block text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                                ✉️ atencion@empresa.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- RRHH --}}
                <div class="contact-card relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 1s;">
                    {{-- Fondo cuadrille dentro del cuadro --}}
                    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                    {{-- Fondo blanco sólido --}}
                    <div class="absolute inset-0 bg-white"></div>
                    
                    <div class="text-center relative z-10">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 icon-bounce">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h5 class="text-2xl font-bold text-red-600 mb-4">Recursos Humanos</h5>
                        <p class="text-gray-800 mb-6">Oportunidades laborales y consultas de personal</p>
                        <div class="space-y-3">
                            <a href="tel:+595456789123" class="block text-green-600 hover:text-green-700 font-semibold transition-colors">
                                📞 +595 456 789 123
                            </a>
                            <a href="mailto:rrhh@empresa.com" class="block text-green-600 hover:text-green-700 font-semibold transition-colors">
                                ✉️ rrhh@empresa.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Marketing --}}
                <div class="contact-card relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 1.2s;">
                    {{-- Fondo cuadrille dentro del cuadro --}}
                    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                    {{-- Fondo blanco sólido --}}
                    <div class="absolute inset-0 bg-white"></div>
                    
                    <div class="text-center relative z-10">
                        <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6 icon-bounce">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                        </div>
                        <h5 class="text-xl font-bold text-red-600 mb-4">Marketing</h5>
                        <p class="text-gray-800 mb-6">Alianzas estratégicas y campañas publicitarias</p>
                        <div class="space-y-3">
                            <a href="tel:+595789123456" class="block text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                                📞 +595 789 123 456
                            </a>
                            <a href="mailto:marketing@empresa.com" class="block text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                                ✉️ marketing@empresa.com
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Redes Sociales --}}
                <div class="contact-card relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up md:col-span-2 lg:col-span-1" style="animation-delay: 1.4s;">
                    {{-- Fondo cuadrille dentro del cuadro --}}
                    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                    {{-- Fondo blanco sólido --}}
                    <div class="absolute inset-0 bg-white"></div>
                    
                    <div class="text-center relative z-10">
                        <div class="w-20 h-20 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6 icon-bounce">
                            <svg class="w-10 h-10 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v3M7 4H5a1 1 0 00-1 1v16a1 1 0 001 1h14a1 1 0 001-1V5a1 1 0 00-1-1h-2M7 4h10M9 9h6m-6 4h6m-6 4h4"></path>
                            </svg>
                        </div>
                        <h5 class="text-2xl font-bold text-red-600 mb-4">Redes Sociales</h5>
                        <p class="text-gray-800 mb-6">Síguenos y mantente conectado con nosotros</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl hover:shadow-blue-500/50 transform hover:-translate-y-1">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-800 rounded-full flex items-center justify-center text-white hover:bg-blue-900 transition-colors shadow-lg hover:shadow-xl hover:shadow-blue-800/50 transform hover:-translate-y-1">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center text-white hover:bg-pink-700 transition-colors shadow-lg hover:shadow-xl hover:shadow-pink-500/50 transform hover:-translate-y-1">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.748.097.118.112.221.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.001 12.017z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition-colors shadow-lg hover:shadow-xl hover:shadow-red-500/50 transform hover:-translate-y-1">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Información General --}}
            <div class="mt-16 relative overflow-hidden rounded-3xl p-8 shadow-2xl hover:shadow-orange-500/10 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 1.6s;">
                {{-- Fondo cuadrille dentro del cuadro --}}
                <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('/images/imagenes/cuadrille tipo 1.jpeg.jpg')"></div>
                {{-- Fondo blanco sólido --}}
                <div class="absolute inset-0 bg-white"></div>
                
                <div class="text-center relative z-10">
                    <h5 class="text-3xl font-bold text-red-600 mb-6">Información General</h5>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h6 class="text-xl font-bold text-gray-800 mb-2">Dirección</h6>
                            <p class="text-gray-800">Celsa Speratti y de la honestidad 1372</p>
                        </div>
                        <div>
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h6 class="text-xl font-bold text-gray-800 mb-2">Horarios</h6>
                            <p class="text-gray-800">07:00h - 17:00h</p>
                        </div>
                        <div>
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h6 class="text-xl font-bold text-gray-800 mb-2">Email General</h6>
                            <p class="text-gray-800">info@dulcesar.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Animaciones personalizadas */
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(50px);
        animation: slideUp 0.8s ease-out forwards;
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .contact-card {
        transition: all 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .icon-bounce {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }
    
    /* Efectos de hover mejorados */
    .hover\:shadow-2xl:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    /* Transiciones suaves */
    .transition-all {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Efectos de transform mejorados */
    .hover\:-translate-y-1:hover {
        transform: translateY(-4px);
    }
    
    .hover\:-translate-y-2:hover {
        transform: translateY(-8px);
    }
    
    /* Efectos de sombra con colores */
    .hover\:shadow-orange-500\/50:hover {
        box-shadow: 0 25px 50px -12px rgba(249, 115, 22, 0.5);
    }
    
    .hover\:shadow-blue-500\/50:hover {
        box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.5);
    }
    
    .hover\:shadow-pink-500\/50:hover {
        box-shadow: 0 25px 50px -12px rgba(236, 72, 153, 0.5);
    }
    
    .hover\:shadow-red-500\/50:hover {
        box-shadow: 0 25px 50px -12px rgba(239, 68, 68, 0.5);
    }
    
    /* Animaciones de elementos decorativos */
    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    
    .animate-bounce {
        animation: bounce 1s infinite;
    }
    
    .animate-ping {
        animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
</style>

@endsection
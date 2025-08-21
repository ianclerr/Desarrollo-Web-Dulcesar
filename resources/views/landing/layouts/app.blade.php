<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('images/logos/dulcesar.png')}}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        
        <!-- Enlaces directos a archivos compilados -->
        <link rel="stylesheet" href="https://748c9889121b.ngrok-free.app/build/assets/app-B-7gIRtA.css">
        <script src="https://748c9889121b.ngrok-free.app/build/assets/app-DNxiirP_.js" defer></script>

        <link rel="stylesheet" href="{{ asset('build/assets/app-B-7gIRtA.css') }}">
        <script src="{{ asset('build/assets/app-DNxiirP_.js') }}" defer></script>

        <!-- Estilos personalizados -->
        <style>


                ..font-display { 
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

            /* Prevenir FOUC */
            .no-fouc {
                display: none;
            }
            
            .loaded .no-fouc {
                display: block;
            }

            /* Compensar header fijo */
            body {
                padding-top: 4rem; /* 64px para header de 16 (h-16) */
            }
            
            @media (min-width: 1024px) {
                body {
                    padding-top: 5rem; /* 80px para header de 20 (h-20) en desktop */
                }
            }
        </style>

        @stack('styles')
    </head>
    
    <body class="font-body text-gray-800 overflow-x-hidden">
        <!-- Header -->
        @include('landing.layouts.header')

        <!-- Page Content -->
        <main class="no-fouc">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('landing.layouts.footer')

        <!-- Sidebar Móvil -->
        @include('landing.layouts.sidebar')

        <!-- Scripts globales -->
        <script>
            // Prevenir FOUC
            document.addEventListener('DOMContentLoaded', function() {
                document.body.classList.add('loaded');
            });

            // Menú móvil
            document.addEventListener('DOMContentLoaded', function() {
                const hamburgerBtn = document.getElementById('hamburger-btn');
                const mobileSidebar = document.getElementById('mobile-sidebar');
                const sidebarPanel = document.getElementById('sidebar-panel');
                const closeSidebarBtn = document.getElementById('close-sidebar-btn');
                const sidebarOverlay = document.getElementById('sidebar-overlay');

                if (hamburgerBtn && mobileSidebar && sidebarPanel && closeSidebarBtn && sidebarOverlay) {
                    // Función para abrir el sidebar
                    function openSidebar() {
                        mobileSidebar.classList.remove('hidden');
                        setTimeout(function() {
                            sidebarPanel.classList.remove('-translate-x-full');
                        }, 10);
                    }

                    // Función para cerrar el sidebar
                    function closeSidebar() {
                        sidebarPanel.classList.add('-translate-x-full');
                        setTimeout(function() {
                            mobileSidebar.classList.add('hidden');
                        }, 300);
                    }

                    // Event listeners
                    hamburgerBtn.addEventListener('click', openSidebar);
                    closeSidebarBtn.addEventListener('click', closeSidebar);
                    sidebarOverlay.addEventListener('click', closeSidebar);

                    // Cerrar con tecla Escape
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape' && !mobileSidebar.classList.contains('hidden')) {
                            closeSidebar();
                        }
                    });

                    // Cerrar sidebar al hacer clic en un enlace (para móviles)
                    const sidebarLinks = document.querySelectorAll('#mobile-sidebar nav a');
                    sidebarLinks.forEach(link => {
                        link.addEventListener('click', closeSidebar);
                    });
                }
            });
        </script>

        @stack('scripts')
    </body>
</html>

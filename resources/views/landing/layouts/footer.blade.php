{{-- Footer completo --}}
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Logo y descripción --}}
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{asset('images/logos/logo_blanco.png')}}" alt="DulCesar" class="w-35 h-17">
                    </div>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Más de tres décadas perfeccionando el arte de los dulces artesanales. Cada producto cuenta una historia de tradición, calidad y dulzura auténtica. Endulzando momentos especiales en todo Paraguay.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://instagram.com/productos_dulcesar" target="_blank" class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors hover:scale-110 transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors hover:scale-110 transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@dulcesarpy" target="_blank" class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors hover:scale-110 transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/DulCesarPy" target="_blank" class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors hover:scale-110 transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                {{-- Contacto --}}
                <div>
                    <h3 class="font-display text-xl font-bold mb-6 text-orange-400">Contacto</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-orange-400 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <p class="text-gray-300">Celsa Speratti y de la honestidad 1372</p>
                                <p class="text-gray-300">San Lorenzo, Paraguay</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <div>
                                <p class="text-gray-300">(021) 575-776</p>
                                <p class="text-gray-300">(0974) 699-585</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <p class="text-gray-300">info@dulcesar.com.py</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-gray-300">07:00 - 17:00</p>
                        </div>
                    </div>
                </div>
                
                {{-- Enlaces útiles --}}
                <div>
                    <h3 class="font-display text-xl font-bold mb-6 text-orange-400">Enlaces Útiles</h3>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Nuestra Historia</a>
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Productos</a>
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Eventos</a>
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Catering</a>
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Calidad</a>
                        <a href="#" class="block text-gray-300 hover:text-orange-400 transition-colors">Contacto</a>
                    </div>
                </div>
            </div>
            
            {{-- Línea divisoria y copyright --}}
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p class="text-gray-400 text-lg mb-4 font-light">
                    "Dulces Momentos"
                </p>
                <p class="text-gray-500">
                    © 2025 Grupo Dul-Cesar Industrial y Comercial S.A. Todos los derechos reservados. Hecho con ❤️ en Paraguay.
                </p>
            </div>
        </div>
    </footer>
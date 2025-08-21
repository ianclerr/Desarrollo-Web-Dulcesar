{{-- Modal de Aderezos --}}
<div id="aderezos-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-white/20 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-7xl max-h-[90vh] overflow-hidden transform transition-all duration-500 scale-95 opacity-0" id="aderezos-modal-content">
            {{-- Header del modal --}}
            <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display text-3xl lg:text-4xl font-bold mb-2">Aderezos Artesanales</h2>
                        <p class="text-white/90 text-lg">Salsas y aderezos elaborados con ingredientes naturales y recetas tradicionales</p>
                    </div>
                    <button onclick="closeModal('aderezos-modal')" class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Contenido scrolleable --}}
            <div class="p-8 overflow-y-auto max-h-[calc(90vh-200px)]">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    {{-- Card 1: Salsa de Ajo --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA DE AJO 1 L.jpg?v={{ time() }}" alt="Salsa de Ajo 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Premium</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa de Ajo</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de ajo artesanal elaborada con ingredientes naturales y recetas tradicionales.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">150ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">5L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Artesanal</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: Salsa de Ajo Lomitero --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA DE AJO LOMITERO 1 L.jpg?v={{ time() }}" alt="Salsa de Ajo Lomitero 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Especial</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa de Ajo Lomitero</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de ajo especial para lomitos, con el sabor perfecto para tus sándwiches.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Especial</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 3: Salsa de Ajo y Limón --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA DE AJO Y LIMON 250 ML.jpg?v={{ time() }}" alt="Salsa de Ajo y Limón 250ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Cítrico</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa de Ajo y Limón</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de ajo con toque cítrico de limón, perfecta para pescados y mariscos.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 4: Salsa de Ajo y Vinagre --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA DE AJO Y VINAGRE 250 ML.jpg?v={{ time() }}" alt="Salsa de Ajo y Vinagre 250ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Vinagreta</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa de Ajo y Vinagre</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de ajo con vinagre, ideal para ensaladas y aderezos ligeros.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Vinagreta</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 5: Salsa de Soja --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA DE SOJA 1 L.jpg?v={{ time() }}" alt="Salsa de Soja 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Oriental</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa de Soja</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de soja tradicional, perfecta para cocina oriental y marinados.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">5L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Oriental</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 6: Salsa Picante --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/SALSA PICANTE 1 L.jpg?v={{ time() }}" alt="Salsa Picante 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Picante</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Salsa Picante</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa picante con el nivel perfecto de picor para dar sabor a tus comidas.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">150ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">5L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Picante</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 7: Vinagre de Alcohol --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/VINAGRE DE ALCOHOL 1 L.jpg?v={{ time() }}" alt="Vinagre de Alcohol 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Vinagre de Alcohol</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Vinagre de alcohol tradicional, ideal para conservas y aderezos.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 8: Vinagre de Manzana --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/VINAGRE DE MANZANA 1 L.jpg?v={{ time() }}" alt="Vinagre de Manzana 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Frutal</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Vinagre de Manzana</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Vinagre de manzana natural, con beneficios para la salud y sabor suave.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Frutal</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">3 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 9: Vinagre de Vino Blanco --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/VINAGRE DE VINO BLANCO 1 L.jpg?v={{ time() }}" alt="Vinagre de Vino Blanco 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Gourmet</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Vinagre de Vino Blanco</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Vinagre de vino blanco gourmet, perfecto para ensaladas y salsas finas.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Gourmet</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">3 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 10: Vinagre de Vino Tinto --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/aderezos/VINAGRE DE VINO TINTO 1 L.jpg?v={{ time() }}" alt="Vinagre de Vino Tinto 1L" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Premium</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Vinagre de Vino Tinto</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Vinagre de vino tinto premium, con sabor intenso y aroma característico.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Premium</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">3 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 
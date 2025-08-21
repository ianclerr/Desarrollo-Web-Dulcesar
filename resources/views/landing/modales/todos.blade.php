{{-- Modal General de Todas las Categorías --}}
<div id="todos-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-white/20 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-7xl max-h-[90vh] overflow-hidden transform transition-all duration-500 scale-95 opacity-0" id="todos-modal-content">
            {{-- Header del modal --}}
            <div class="bg-gradient-to-r from-orange-500 to-amber-500 text-white p-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display text-3xl lg:text-4xl font-bold mb-2">Todos Nuestros Productos</h2>
                        <p class="text-white/90 text-lg">Descubrí toda nuestra gama de productos artesanales</p>
                    </div>
                    <button onclick="closeModal('todos-modal')" class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Contenido scrolleable --}}
            <div class="p-8 overflow-y-auto max-h-[calc(90vh-200px)]">
                
                {{-- Sección de Aderezos --}}
                <div class="mb-12">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-6 text-center">Aderezos Artesanales</h3>
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
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de ajo artesanal elaborada con ingredientes naturales.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">150ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">5L</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 2: Salsa de Soja --}}
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
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Salsa de soja tradicional, perfecta para cocina oriental.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">5L</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 3: Vinagre de Manzana --}}
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
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Vinagre de manzana natural, con beneficios para la salud.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1L</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sección de Granos --}}
                <div class="mb-12">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-6 text-center">Granos Selectos</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        {{-- Card 1: Galleta Molida --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/granos/GALLETA MOLIDA 400 G.jpg?v={{ time() }}" alt="Galleta Molida 400g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Galleta Molida</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Galleta molida de alta calidad, perfecta para postres tradicionales.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 2: Maíz Pisingallo --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/granos/MAIZ PORORO 400 G.jpg?v={{ time() }}" alt="Maíz Pisingallo 400g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Natural</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Maíz Pisingallo</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Maíz pisingallo de la mejor calidad, perfecto para pochoclo casero.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 3: Poroto --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/granos/POROTO 400 G.jpg?v={{ time() }}" alt="Poroto 400g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Proteico</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Poroto</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Poroto de excelente calidad, rico en proteínas y fibra natural.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sección de Jugos --}}
                <div class="mb-12">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-6 text-center">Jugos Naturales</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        {{-- Card 1: Jugo Twist Energy --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/jugos/JUGO TWIST ENERGY 480 ML.jpg?v={{ time() }}" alt="Jugo Twist Energy 480ml" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Energy</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Twist Energy</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Jugo energético natural con vitaminas y minerales.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">480ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">2L</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 2: Jugo Concentrado de Naranja --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/jugos/JUGO CONCENTRADO DE NARANJA 900 ML.jpg?v={{ time() }}" alt="Jugo Concentrado de Naranja 900ml" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Concentrado</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Concentrado de Naranja</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Concentrado de naranja natural, perfecto para diluir.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">900ml</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 3: Jugo Twist Nectar --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/jugos/JUGO TWIST NECTAR 480 ML.jpg?v={{ time() }}" alt="Jugo Twist Nectar 480ml" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Néctar</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Twist Nectar</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Néctar de frutas natural con sabor intenso.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">480ml</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">2L</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sección de Mermeladas --}}
                <div class="mb-12">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-6 text-center">Mermeladas Artesanales</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        {{-- Card 1: Mermelada de Guayaba Tradicional --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/mermeladas/MERMELADA DE GUAYABA TRADICIONAL 250 G.jpg?v={{ time() }}" alt="Mermelada de Guayaba Tradicional 250g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Guayaba Tradicional</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada artesanal de guayaba con receta tradicional.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1kg</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 2: Mermelada de Frutilla Light --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/mermeladas/MERMELADA DE FRUTILLA LIGHT ECONOMICA 400 G.jpg?v={{ time() }}" alt="Mermelada de Frutilla Light 400g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Light</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Frutilla Light</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada light de frutilla con menos calorías.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                        {{-- Card 3: Mermelada de Naranja Zero --}}
                        <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                            {{-- Imagen --}}
                            <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                                <img src="/images/imagenes/mermeladas/MERMELADA DE NARANJA ZERO EN FRASCO 380 G.jpg?v={{ time() }}" alt="Mermelada de Naranja Zero 380g" class="w-full h-full object-cover">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Zero</span>
                                </div>
                            </div>
                            
                            {{-- Contenido --}}
                            <div class="p-6">
                                <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Naranja Zero</h3>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada zero de naranja sin azúcar añadida.</p>
                                
                                {{-- Formatos --}}
                                <div class="mb-4">
                                    <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    </div>
                                </div>
                                
                                {{-- Botón --}}
                                <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                    Solicitar información
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 
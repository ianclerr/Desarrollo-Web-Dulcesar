{{-- Modal de Mermeladas --}}
<div id="mermeladas-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-white/20 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-7xl max-h-[90vh] overflow-hidden transform transition-all duration-500 scale-95 opacity-0" id="mermeladas-modal-content">
            {{-- Header del modal --}}
            <div class="bg-gradient-to-r from-yellow-400 to-amber-500 text-white p-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display text-3xl lg:text-4xl font-bold mb-2">Mermeladas Artesanales</h2>
                        <p class="text-white/90 text-lg">Mermeladas tradicionales, light y zero de la más alta calidad</p>
                    </div>
                    <button onclick="closeModal('mermeladas-modal')" class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Contenido scrolleable --}}
            <div class="p-8 overflow-y-auto max-h-[calc(90vh-200px)]">
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada artesanal de guayaba con receta tradicional paraguaya.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">240g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">500g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">750g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">1kg</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Artesanal</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">6 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: Mermelada de Frutilla Tradicional --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE FRUTILLA TRADICIONAL ECONOMICA 240 G.jpg?v={{ time() }}" alt="Mermelada de Frutilla Tradicional 240g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Frutilla Tradicional</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada artesanal de frutilla con sabor dulce y natural.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">240g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Artesanal</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 3: Mermelada de Naranja Tradicional --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE NARANJA TRADICIONAL 450 G.jpg?v={{ time() }}" alt="Mermelada de Naranja Tradicional 450g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Naranja Tradicional</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada artesanal de naranja con sabor cítrico refrescante.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">240g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 4: Mermelada de Ciruela Tradicional --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE CIRUELA TRADICIONAL ECONOMICA 240 G.jpg?v={{ time() }}" alt="Mermelada de Ciruela Tradicional 240g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Tradicional</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Ciruela Tradicional</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada artesanal de ciruela con sabor intenso y natural.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">240g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">450g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 5: Mermelada de Guayaba Light --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE GUAYABA LIGHT ECONOMICA 400 G.jpg?v={{ time() }}" alt="Mermelada de Guayaba Light 400g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Light</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Guayaba Light</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada light de guayaba con menos calorías y el mismo sabor.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">230g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Light</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">Baja calorías</span>
                                    <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 6: Mermelada de Frutilla Light --}}
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada light de frutilla con sabor dulce y menos calorías.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">230g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Light</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">Baja calorías</span>
                                    <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 7: Mermelada de Naranja Light --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE NARANJA LIGHT ECONOMICA 400 G.jpg?v={{ time() }}" alt="Mermelada de Naranja Light 400g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Light</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Naranja Light</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada light de naranja con sabor cítrico y menos calorías.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">230g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Light</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-medium">3 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 8: Mermelada de Ciruela Light --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE CIRUELA LIGHT ECONOMICA 400 G.jpg?v={{ time() }}" alt="Mermelada de Ciruela Light 400g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Light</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Ciruela Light</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada light de ciruela con sabor intenso y menos calorías.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">230g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">250g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Light</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-medium">4 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 9: Mermelada de Guayaba Zero --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE GUAYABA ZERO EN FRASCO 380 G.jpg?v={{ time() }}" alt="Mermelada de Guayaba Zero 380g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Zero</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Guayaba Zero</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada zero de guayaba sin azúcar añadida.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Zero</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin azúcar</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 10: Mermelada de Frutilla Zero --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE FRUTILLA ZERO EN FRASCO 380 G.jpg?v={{ time() }}" alt="Mermelada de Frutilla Zero 380g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Zero</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Frutilla Zero</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada zero de frutilla sin azúcar añadida.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Zero</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin azúcar</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 11: Mermelada de Naranja Zero --}}
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
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Zero</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 12: Mermelada de Ciruela Zero --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-yellow-400 to-amber-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/mermeladas/MERMELADA DE CIRUELA ZERO EN FRASCO 380 G.jpg?v={{ time() }}" alt="Mermelada de Ciruela Zero 380g" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Zero</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Mermelada de Ciruela Zero</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Mermelada zero de ciruela sin azúcar añadida.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">380g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full font-medium">Zero</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-yellow-500 hover:to-amber-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

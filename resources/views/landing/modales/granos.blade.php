{{-- Modal de Granos --}}
<div id="granos-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-white/20 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-7xl max-h-[90vh] overflow-hidden transform transition-all duration-500 scale-95 opacity-0" id="granos-modal-content">
            {{-- Header del modal --}}
            <div class="bg-gradient-to-r from-amber-500 to-orange-600 text-white p-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display text-3xl lg:text-4xl font-bold mb-2">Granos Selectos</h2>
                        <p class="text-white/90 text-lg">Granos de la más alta calidad, cultivados con métodos sostenibles</p>
                    </div>
                    <button onclick="closeModal('granos-modal')" class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Contenido scrolleable --}}
            <div class="p-8 overflow-y-auto max-h-[calc(90vh-200px)]">
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Galleta molida de alta calidad, perfecta para postres y recetas tradicionales.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-100 text-amber-700 text-xs px-2 py-1 rounded-full font-medium">Tradicional</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Maíz pisingallo de la mejor calidad, perfecto para hacer pochoclo casero.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-100 text-amber-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
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
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">200g</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">400g</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-amber-100 text-amber-700 text-xs px-2 py-1 rounded-full font-medium">Proteico</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Sin TACC</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-amber-500 to-orange-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-amber-600 hover:to-orange-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 
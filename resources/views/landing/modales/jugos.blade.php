{{-- Modal de Jugos --}}
<div id="jugos-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-white/20 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-7xl max-h-[90vh] overflow-hidden transform transition-all duration-500 scale-95 opacity-0" id="jugos-modal-content">
            {{-- Header del modal --}}
            <div class="bg-gradient-to-r from-orange-400 to-yellow-500 text-white p-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-display text-3xl lg:text-4xl font-bold mb-2">Jugos Naturales</h2>
                        <p class="text-white/90 text-lg">Jugos naturales y concentrados de la más alta calidad</p>
                    </div>
                    <button onclick="closeModal('jugos-modal')" class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Contenido scrolleable --}}
            <div class="p-8 overflow-y-auto max-h-[calc(90vh-200px)]">
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Jugo energético natural con vitaminas y minerales para mantenerte activo.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">480ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">2L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Energético</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: Jugo Twist Nectar --}}
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Néctar de frutas natural con sabor intenso y textura suave.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">480ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">2L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Néctar</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 3: Jugo Twist Citrus --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/jugos/JUGO TWIST CITRUS 480 ML.jpg?v={{ time() }}" alt="Jugo Twist Citrus 480ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Cítrico</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Twist Citrus</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Jugo cítrico refrescante con vitamina C natural.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">480ml</span>
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">2L</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Vitamina C</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">2 formatos</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 4: Jugo Concentrado de Naranja --}}
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
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Concentrado de naranja natural, perfecto para diluir y disfrutar.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">900ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Concentrado</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Natural</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 5: Jugo Concentrado de Piña --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/jugos/JUGO CONCENTRADO DE PIÑA 900 ML.jpg?v={{ time() }}" alt="Jugo Concentrado de Piña 900ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Concentrado</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Concentrado de Piña</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Concentrado de piña natural con sabor tropical intenso.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">900ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Concentrado</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Tropical</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 6: Jugo Concentrado de Frutilla --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/jugos/JUGO CONCENTRADO DE FRUTILLA 900 ML.jpg?v={{ time() }}" alt="Jugo Concentrado de Frutilla 900ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Concentrado</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Concentrado de Frutilla</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Concentrado de frutilla natural con sabor dulce y aromático.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">900ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Concentrado</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Dulce</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                    {{-- Card 7: Jugo Concentrado de Pomelo --}}
                    <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                        {{-- Imagen --}}
                        <div class="relative h-48 bg-gradient-to-br from-orange-400 to-yellow-500 flex items-center justify-center overflow-hidden">
                            <img src="/images/imagenes/jugos/JUGO CONCENTRADO DE POMELO 900 ML.jpg?v={{ time() }}" alt="Jugo Concentrado de Pomelo 900ml" class="w-full h-full object-cover">
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/20 text-white text-xs px-2 py-1 rounded-full backdrop-blur-sm">Concentrado</span>
                            </div>
                        </div>
                        
                        {{-- Contenido --}}
                        <div class="p-6">
                            <h3 class="font-display text-xl font-bold text-gray-800 mb-3">Jugo Concentrado de Pomelo</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Concentrado de pomelo natural con sabor cítrico refrescante.</p>
                            
                            {{-- Formatos --}}
                            <div class="mb-4">
                                <h4 class="text-xs font-semibold text-gray-700 mb-2 uppercase tracking-wide">Formatos Disponibles</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">900ml</span>
                                </div>
                            </div>
                            
                            {{-- Beneficios --}}
                            <div class="mb-6">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full font-medium">Concentrado</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">Cítrico</span>
                                    <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-medium">1 formato</span>
                                </div>
                            </div>
                            
                            {{-- Botón --}}
                            <button class="w-full bg-gradient-to-r from-orange-400 to-yellow-500 text-white py-3 px-4 rounded-xl font-semibold hover:from-orange-500 hover:to-yellow-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Solicitar más información
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> 
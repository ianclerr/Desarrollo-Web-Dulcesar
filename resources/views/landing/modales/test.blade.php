{{-- Modal de Prueba --}}
<div id="test-modal" class="fixed inset-0 z-50 hidden">
    {{-- Fondo borroso --}}
    <div class="absolute inset-0 bg-black/50 backdrop-blur-md"></div>
    
    {{-- Contenido del modal --}}
    <div class="relative h-full flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md p-8 transform transition-all duration-500 scale-95 opacity-0" id="test-modal-content">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Modal de Prueba</h2>
            <p class="text-gray-600 mb-6">Este es un modal de prueba para verificar que el JavaScript funciona correctamente.</p>
            <div class="flex gap-4">
                <button onclick="closeModal('test-modal')" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Cerrar
                </button>
                <button onclick="openModal('aderezos-modal')" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Abrir Aderezos
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Función de prueba
function openTestModal() {
    openModal('test-modal');
}
</script> 
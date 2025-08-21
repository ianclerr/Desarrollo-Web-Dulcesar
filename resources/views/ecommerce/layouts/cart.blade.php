{{-- Cart Sidebar --}}
<div id="cartSidebar" class="fixed inset-y-0 right-0 w-full sm:max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50 flex flex-col h-[100dvh]">
    <div class="flex flex-col h-full">
        <!-- Encabezado del carrito -->
        <div class="p-4 sm:p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <h3 class="text-lg sm:text-xl font-bold text-gray-800">Carrito de Compras</h3>
                <button onclick="closeCart()" class="p-2 hover:bg-red-50 rounded-full transition-colors">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Lista de productos -->
        <div id="cartItems" class="flex-1 overflow-y-auto p-4 sm:p-6"></div>

        <!-- Footer del carrito -->
        <div class="p-4 sm:p-6 border-t border-gray-100 bg-white">
            <div class="mb-4">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-gray-600">Subtotal:</span>
                    <span id="cartSubtotal" class="text-base sm:text-lg font-medium">₲ 0</span>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-gray-600">IVA (10%):</span>
                    <span id="cartTax" class="text-base sm:text-lg font-medium">₲ 0</span>
                </div>
                <div class="flex items-center justify-between text-lg font-bold">
                    <span class="text-gray-800">Total:</span>
                    <span id="cartTotal" class="text-xl sm:text-2xl text-red-600">₲ 0</span>
                </div>
            </div>
            <button onclick="checkout()" 
                    class="w-full bg-red-600 text-white py-3 sm:py-4 rounded-xl font-medium hover:bg-red-700 transition-all duration-300 flex items-center justify-center space-x-2">
                <span>Finalizar Compra</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

{{-- Cart Overlay --}}
<div id="cartOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40" onclick="closeCart()"></div> 
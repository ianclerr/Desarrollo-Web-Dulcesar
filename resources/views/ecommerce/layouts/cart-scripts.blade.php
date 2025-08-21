@push('scripts')
<script>
    // Variables globales
    let cart = [];
    const TAX_RATE = 0.10; // 10% IVA

    // Función para agregar productos al carrito desde otras páginas
    function addToCartHeader(product) {
        const existingItem = cart.find(item => item.id === product.id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                ...product,
                quantity: 1,
                selectedFormat: 'Estándar' // Formato por defecto
            });
        }
        
        updateCartUI();
        showNotification(`${product.name} agregado al carrito`);
    }

    // Funciones del carrito
    function openCart() {
        const cartSidebar = document.getElementById('cartSidebar');
        const cartOverlay = document.getElementById('cartOverlay');
        
        if (cartSidebar) cartSidebar.classList.remove('translate-x-full');
        if (cartOverlay) cartOverlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
        updateCartUI();
    }

    function closeCart() {
        const cartSidebar = document.getElementById('cartSidebar');
        const cartOverlay = document.getElementById('cartOverlay');
        
        if (cartSidebar) cartSidebar.classList.add('translate-x-full');
        if (cartOverlay) cartOverlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    function updateCartUI() {
        const cartItems = document.getElementById('cartItems');
        const cartCount = document.getElementById('cart-count');
        
        if (!cartItems) return;
        
        if (cart.length === 0) {
            cartItems.innerHTML = `
                <div class="flex flex-col items-center justify-center h-full text-center text-gray-500">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-base sm:text-lg mb-2">Tu carrito está vacío</p>
                    <p class="text-sm">¡Agrega algunos productos!</p>
                </div>
            `;
        } else {
            cartItems.innerHTML = cart.map(item => `
                <div class="flex items-start space-x-3 sm:space-x-4 mb-6 pb-6 border-b border-gray-100 last:border-0 last:mb-0 last:pb-0">
                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-lg">
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between">
                            <div class="pr-2">
                                <h4 class="font-medium text-gray-800 text-sm sm:text-base truncate">${item.name}</h4>
                                <p class="text-xs sm:text-sm text-gray-500 mb-1">Formato: ${item.selectedFormat || 'Estándar'}</p>
                                <div class="flex items-center mt-2">
                                    <button onclick="updateCartItemQuantity(${item.id}, '${item.selectedFormat || 'Estándar'}', ${item.quantity - 1})" 
                                            class="w-7 h-7 sm:w-8 sm:h-8 flex items-center justify-center bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button>
                                    <span class="w-8 sm:w-10 text-center text-sm sm:text-base font-medium">${item.quantity}</span>
                                    <button onclick="updateCartItemQuantity(${item.id}, '${item.selectedFormat || 'Estándar'}', ${item.quantity + 1})"
                                            class="w-7 h-7 sm:w-8 sm:h-8 flex items-center justify-center bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors">
                                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="text-right flex flex-col items-end">
                                <span class="font-medium text-red-600 text-sm sm:text-base whitespace-nowrap">₲ ${(item.price * item.quantity).toLocaleString()}</span>
                                <button onclick="removeFromCart(${item.id}, '${item.selectedFormat || 'Estándar'}')" 
                                        class="mt-2 text-gray-400 hover:text-red-600 transition-colors">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Actualizar contadores y totales
        const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);
        if (cartCount) cartCount.textContent = itemCount;
        updateCartTotals();
    }

    function updateCartTotals() {
        const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const tax = subtotal * TAX_RATE;
        const total = subtotal + tax;

        const cartSubtotal = document.getElementById('cartSubtotal');
        const cartTax = document.getElementById('cartTax');
        const cartTotal = document.getElementById('cartTotal');
        
        if (cartSubtotal) cartSubtotal.textContent = `₲ ${subtotal.toLocaleString()}`;
        if (cartTax) cartTax.textContent = `₲ ${tax.toLocaleString()}`;
        if (cartTotal) cartTotal.textContent = `₲ ${total.toLocaleString()}`;
    }

    function updateCartItemQuantity(productId, format, newQuantity) {
        const itemIndex = cart.findIndex(item => item.id === productId && (item.selectedFormat || 'Estándar') === format);
        
        if (itemIndex === -1) return;

        if (newQuantity <= 0) {
            removeFromCart(productId, format);
        } else {
            cart[itemIndex].quantity = newQuantity;
            updateCartUI();
        }
    }

    function removeFromCart(productId, format) {
        cart = cart.filter(item => !(item.id === productId && (item.selectedFormat || 'Estándar') === format));
        updateCartUI();
    }

    function checkout() {
        if (cart.length === 0) {
            alert('El carrito está vacío');
            return;
        }

        // Aquí iría la lógica de checkout
        alert('¡Gracias por tu compra!');
        cart = [];
        updateCartUI();
        closeCart();
    }

    function showNotification(message) {
        // Crear notificación temporal
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animar entrada
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Animar salida
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    // Event Listeners
    document.addEventListener('DOMContentLoaded', function() {
        const cartBtn = document.getElementById('cart-btn');
        if (cartBtn) {
            cartBtn.addEventListener('click', openCart);
        }

        // Menú móvil
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Usuario dropdown
        const userMenuBtn = document.getElementById('user-menu-btn');
        const userDropdown = document.getElementById('user-dropdown');
        if (userMenuBtn && userDropdown) {
            userMenuBtn.addEventListener('click', function() {
                userDropdown.classList.toggle('hidden');
            });
        }

        // Cerrar dropdowns al hacer clic fuera
        document.addEventListener('click', function(e) {
            if (userDropdown && !e.target.closest('#user-menu-btn')) {
                userDropdown.classList.add('hidden');
            }
        });
    });

    // Cerrar con Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeCart();
        }
    });
</script>
@endpush 
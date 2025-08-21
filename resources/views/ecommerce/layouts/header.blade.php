{{-- Header del Ecommerce --}}
<header class="bg-white shadow-sm sticky top-0 z-30">
    <!-- Top bar -->
    <div class="bg-dulcesar-600 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <span>📞 0974 699-585</span>
                    <span>📧 info@dulcesar.com</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-dulcesar-200 transition-colors">Seguimiento de pedidos</a>
                    <a href="#" class="hover:text-dulcesar-200 transition-colors">Ayuda</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main header -->
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('ecommerce.home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logos/dulcesar.png') }}" alt="Dulcesar" class="h-10 w-auto">
                    <div class="hidden md:block">
                        <h1 class="text-xl font-display text-dulcesar-600">Dulcesar</h1>
                        <p class="text-xs text-gray-600">Dulces Artesanales</p>
                        <p class="text-xs text-gray-500">Desde 1982</p>
                    </div>
                </a>
            </div>

            <!-- Search bar -->
            <div class="hidden lg:flex flex-1 max-w-2xl mx-8">
                <div class="relative w-full">
                    <input type="text" 
                           id="search-input"
                           placeholder="Buscar productos..." 
                           class="w-full pl-4 pr-12 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-dulcesar-500 focus:border-transparent">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-dulcesar-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right side actions -->
            <div class="flex items-center space-x-4">
                <!-- User menu -->
                <div class="relative hidden md:block">
                    <button id="user-menu-btn" class="flex items-center space-x-2 text-gray-700 hover:text-dulcesar-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Mi Cuenta</span>
                    </button>
                    
                    <!-- User dropdown -->
                    <div id="user-dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Iniciar Sesión</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Registrarse</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mis Pedidos</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Favoritos</a>
                    </div>
                </div>

                <!-- Wishlist -->
                <button class="relative text-gray-700 hover:text-dulcesar-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </button>

                <!-- Cart -->
                <button id="cart-btn" class="relative text-gray-700 hover:text-dulcesar-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                    <span id="cart-count" class="absolute -top-2 -right-2 bg-dulcesar-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </button>

                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="lg:hidden text-gray-700 hover:text-dulcesar-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile search -->
        <div class="lg:hidden mt-3">
            <div class="relative">
                <input type="text" 
                       placeholder="Buscar productos..." 
                       class="w-full pl-4 pr-12 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-dulcesar-500 focus:border-transparent">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-dulcesar-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Navigation with Categories -->
    <nav class="bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Categories -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Aderezos</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Granos</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Jugos</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Mermeladas</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Mermeladas Light</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Mermeladas Zero</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Navideña</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Repostería</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Saludables</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Snacks</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Tradicional</a>
                    <a href="#" class="py-3 px-2 text-gray-700 hover:text-dulcesar-600 transition-colors font-medium text-sm">Zero</a>
                </div>

                <!-- Mobile categories button -->
                <button id="categories-btn" class="lg:hidden flex items-center space-x-2 py-3 text-gray-700 hover:text-dulcesar-600 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span class="text-sm">Categorías</span>
                </button>

                <!-- Promo banner -->
                <div class="hidden lg:flex items-center">
                    <span class="text-xs text-dulcesar-600 font-medium">🚚 Envío gratis por la Zona!</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="lg:hidden bg-white border-t border-gray-200 hidden">
        <div class="px-4 py-2 space-y-1">
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Aderezos</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Granos</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Jugos</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Mermeladas</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Mermeladas Light</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Mermeladas Zero</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Navideña</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Repostería</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Saludables</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Snacks</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Tradicional</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-dulcesar-600 transition-colors">Zero</a>
        </div>
    </div>
</header>

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
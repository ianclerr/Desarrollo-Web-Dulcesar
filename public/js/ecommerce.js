// Ecommerce JavaScript - Dulcesar
class DulcesarEcommerce {
    constructor() {
        this.cart = JSON.parse(localStorage.getItem('cart')) || [];
        this.products = this.getProducts();
        this.filteredProducts = [...this.products];
        this.currentView = 'grid';
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.renderProducts();
        this.updateCartCount();
        this.updateCartDisplay();
    }

    getProducts() {
        return [
            {
                id: 1,
                name: "Mermelada de Fresa",
                description: "Mermelada artesanal de fresas frescas, elaborada con frutas seleccionadas y azúcar natural",
                price: 15000,
                originalPrice: 15000,
                category: "mermeladas",
                image: "/images/imagenes/mermelada.jpg",
                inStock: true,
                rating: 4.5,
                reviews: 23,
                weight: "250g"
            },
            {
                id: 2,
                name: "Dulce de Leche",
                description: "Dulce de leche artesanal tradicional, cremoso y delicioso",
                price: 21000,
                originalPrice: 21000,
                category: "dulces",
                image: "/images/imagenes/cuadrille tipo 1.jpeg.jpg",
                inStock: true,
                rating: 4.8,
                reviews: 45,
                weight: "300g"
            },
            {
                id: 3,
                name: "Jalea de Mora",
                description: "Jalea natural de moras silvestres, sin conservantes artificiales",
                price: 12000,
                originalPrice: 12000,
                category: "jaleas",
                image: "/images/imagenes/mermelada.jpg",
                inStock: true,
                rating: 4.3,
                reviews: 18,
                weight: "200g"
            },
            {
                id: 4,
                name: "Conserva de Durazno",
                description: "Conserva artesanal de duraznos maduros en almíbar natural",
                price: 18000,
                originalPrice: 18000,
                category: "conservas",
                image: "/images/imagenes/cuadrille tipo 1.jpeg.jpg",
                inStock: true,
                rating: 4.6,
                reviews: 31,
                weight: "400g"
            },
            {
                id: 5,
                name: "Mermelada de Mango",
                description: "Mermelada de mango maduro con un toque de canela",
                price: 14000,
                originalPrice: 14000,
                category: "mermeladas",
                image: "/images/imagenes/mermelada.jpg",
                inStock: true,
                rating: 4.4,
                reviews: 27,
                weight: "250g"
            },
            {
                id: 6,
                name: "Dulce de Guayaba",
                description: "Dulce tradicional de guayaba, perfecto para acompañar quesos",
                price: 16000,
                originalPrice: 16000,
                category: "dulces",
                image: "/images/imagenes/cuadrille tipo 1.jpeg.jpg",
                inStock: true,
                rating: 4.7,
                reviews: 39,
                weight: "250g"
            },
            {
                id: 7,
                name: "Jalea de Manzana",
                description: "Jalea casera de manzanas verdes con un sabor único",
                price: 13000,
                originalPrice: 13000,
                category: "jaleas",
                image: "/images/imagenes/mermelada.jpg",
                inStock: true,
                rating: 4.2,
                reviews: 15,
                weight: "200g"
            },
            {
                id: 8,
                name: "Conserva de Piña",
                description: "Conserva de piña natural en almíbar ligero",
                price: 17000,
                originalPrice: 17000,
                category: "conservas",
                image: "/images/imagenes/cuadrille tipo 1.jpeg.jpg",
                inStock: true,
                rating: 4.5,
                reviews: 22,
                weight: "350g"
            }
        ];
    }

    setupEventListeners() {
        // Filtros
        document.querySelectorAll('.category-filter, .price-filter').forEach(filter => {
            filter.addEventListener('change', () => this.filterProducts());
        });
        
        // Ordenamiento
        const sortSelect = document.getElementById('sort-select');
        if (sortSelect) {
            sortSelect.addEventListener('change', () => this.filterProducts());
        }
        
        // Vista
        const gridBtn = document.getElementById('grid-view');
        const listBtn = document.getElementById('list-view');
        if (gridBtn) gridBtn.addEventListener('click', () => this.setView('grid'));
        if (listBtn) listBtn.addEventListener('click', () => this.setView('list'));
        
        // Limpiar filtros
        const clearBtn = document.getElementById('clear-filters');
        if (clearBtn) clearBtn.addEventListener('click', () => this.clearFilters());
        
        // Carrito
        const cartBtn = document.getElementById('cart-btn');
        const closeCartBtn = document.getElementById('close-cart');
        const continueShoppingBtn = document.getElementById('continue-shopping');
        
        if (cartBtn) cartBtn.addEventListener('click', () => this.toggleCart());
        if (closeCartBtn) closeCartBtn.addEventListener('click', () => this.toggleCart());
        if (continueShoppingBtn) continueShoppingBtn.addEventListener('click', () => this.toggleCart());
        
        // Menú móvil
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', () => this.toggleMobileMenu());
        
        // Usuario
        const userMenuBtn = document.getElementById('user-menu-btn');
        if (userMenuBtn) userMenuBtn.addEventListener('click', () => this.toggleUserMenu());
        
        // Cupón
        const applyCouponBtn = document.getElementById('apply-coupon');
        if (applyCouponBtn) applyCouponBtn.addEventListener('click', () => this.applyCoupon());
        
        // Checkout
        const checkoutBtn = document.getElementById('checkout-btn');
        if (checkoutBtn) checkoutBtn.addEventListener('click', () => this.proceedToCheckout());
        
        // Cerrar dropdowns al hacer clic fuera
        document.addEventListener('click', (e) => this.handleOutsideClick(e));
        
        // Búsqueda
        const searchInput = document.getElementById('search-input');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => this.handleSearch(e.target.value));
        }
    }

    renderProducts() {
        const container = document.getElementById('products-grid');
        const countElement = document.getElementById('product-count');
        
        if (!container) return;
        
        if (countElement) {
            countElement.textContent = `${this.filteredProducts.length} productos`;
        }
        
        if (this.filteredProducts.length === 0) {
            container.innerHTML = `
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.47-.881-6.08-2.33"></path>
                    </svg>
                    <p class="text-gray-500 text-lg">No se encontraron productos</p>
                    <p class="text-gray-400">Intenta ajustar los filtros</p>
                </div>
            `;
            return;
        }
        
        const productHTML = this.filteredProducts.map(product => this.createProductCard(product)).join('');
        container.innerHTML = productHTML;
        
        // Agregar event listeners a los botones
        this.addProductEventListeners();
    }

    createProductCard(product) {
        const discount = product.originalPrice > product.price ? 
            Math.round((1 - product.price / product.originalPrice) * 100) : 0;
        
        return `
            <div class="product-card bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300">
                <div class="relative">
                    <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover">
                    ${discount > 0 ? `
                        <div class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            -${discount}%
                        </div>
                    ` : ''}
                    <button class="wishlist-btn absolute top-4 right-4 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-dulcesar-50 transition-colors" data-id="${product.id}">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-800">${product.name}</h3>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <span class="text-sm text-gray-600 ml-1">${product.rating}</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">${product.description}</p>
                    <p class="text-xs text-gray-500 mb-4">${product.weight}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-lg font-bold text-dulcesar-600">$${product.price.toLocaleString()}</span>
                            ${product.originalPrice > product.price ? `
                                <span class="text-sm text-gray-400 line-through">$${product.originalPrice.toLocaleString()}</span>
                            ` : ''}
                        </div>
                        <button class="add-to-cart bg-dulcesar-600 text-white px-4 py-2 rounded-lg hover:bg-dulcesar-700 transition-colors" data-id="${product.id}">
                            Agregar
                        </button>
                    </div>
                </div>
            </div>
        `;
    }

    addProductEventListeners() {
        // Botones de agregar al carrito
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', (e) => {
                const productId = parseInt(e.target.dataset.id);
                this.addToCart(productId);
            });
        });
        
        // Botones de wishlist
        document.querySelectorAll('.wishlist-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const productId = parseInt(e.target.closest('.wishlist-btn').dataset.id);
                this.toggleWishlist(productId);
            });
        });
    }

    filterProducts() {
        const selectedCategories = Array.from(document.querySelectorAll('.category-filter:checked')).map(cb => cb.value);
        const selectedPrice = document.querySelector('input[name="price"]:checked')?.value;
        const sortBy = document.getElementById('sort-select')?.value || 'name';
        
        this.filteredProducts = this.products.filter(product => {
            // Filtro por categoría
            if (selectedCategories.length > 0 && !selectedCategories.includes(product.category)) {
                return false;
            }
            
            // Filtro por precio
            if (selectedPrice) {
                const [min, max] = selectedPrice.split('-').map(p => p === '+' ? Infinity : parseInt(p));
                if (product.price < min || (max !== Infinity && product.price > max)) {
                    return false;
                }
            }
            
            return true;
        });
        
        // Ordenamiento
        this.filteredProducts.sort((a, b) => {
            switch (sortBy) {
                case 'name':
                    return a.name.localeCompare(b.name);
                case 'name-desc':
                    return b.name.localeCompare(a.name);
                case 'price':
                    return a.price - b.price;
                case 'price-desc':
                    return b.price - a.price;
                case 'popular':
                    return b.reviews - a.reviews;
                default:
                    return 0;
            }
        });
        
        this.renderProducts();
    }

    handleSearch(query) {
        if (!query.trim()) {
            this.filteredProducts = [...this.products];
        } else {
            this.filteredProducts = this.products.filter(product => 
                product.name.toLowerCase().includes(query.toLowerCase()) ||
                product.description.toLowerCase().includes(query.toLowerCase()) ||
                product.category.toLowerCase().includes(query.toLowerCase())
            );
        }
        this.renderProducts();
    }

    clearFilters() {
        document.querySelectorAll('.category-filter, .price-filter').forEach(filter => {
            filter.checked = false;
        });
        const sortSelect = document.getElementById('sort-select');
        if (sortSelect) sortSelect.value = 'name';
        
        this.filteredProducts = [...this.products];
        this.renderProducts();
    }

    setView(view) {
        this.currentView = view;
        const container = document.getElementById('products-grid');
        const gridBtn = document.getElementById('grid-view');
        const listBtn = document.getElementById('list-view');
        
        if (!container) return;
        
        if (view === 'grid') {
            container.className = 'grid md:grid-cols-2 lg:grid-cols-3 gap-6';
            if (gridBtn) gridBtn.className = 'p-2 rounded-md bg-dulcesar-100 text-dulcesar-600';
            if (listBtn) listBtn.className = 'p-2 rounded-md text-gray-400 hover:text-dulcesar-600';
        } else {
            container.className = 'space-y-4';
            if (gridBtn) gridBtn.className = 'p-2 rounded-md text-gray-400 hover:text-dulcesar-600';
            if (listBtn) listBtn.className = 'p-2 rounded-md bg-dulcesar-100 text-dulcesar-600';
        }
        
        this.renderProducts();
    }

    // Funciones del carrito
    addToCart(productId) {
        const product = this.products.find(p => p.id === productId);
        if (!product) return;
        
        const existingItem = this.cart.find(item => item.id === productId);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.cart.push({
                ...product,
                quantity: 1
            });
        }
        
        this.saveCart();
        this.updateCartCount();
        this.updateCartDisplay();
        this.showNotification(`${product.name} agregado al carrito`);
    }

    removeFromCart(productId) {
        this.cart = this.cart.filter(item => item.id !== productId);
        this.saveCart();
        this.updateCartCount();
        this.updateCartDisplay();
    }

    updateQuantity(productId, newQuantity) {
        const item = this.cart.find(item => item.id === productId);
        if (item) {
            if (newQuantity <= 0) {
                this.removeFromCart(productId);
            } else {
                item.quantity = newQuantity;
                this.saveCart();
                this.updateCartCount();
                this.updateCartDisplay();
            }
        }
    }

    saveCart() {
        localStorage.setItem('cart', JSON.stringify(this.cart));
    }

    updateCartCount() {
        const count = this.cart.reduce((total, item) => total + item.quantity, 0);
        const countElement = document.getElementById('cart-count');
        if (countElement) {
            countElement.textContent = count;
        }
    }

    updateCartDisplay() {
        const cartItems = document.getElementById('cart-items');
        const emptyCart = document.getElementById('empty-cart');
        const cartSummary = document.getElementById('cart-summary');
        const checkoutBtn = document.getElementById('checkout-btn');
        
        if (!cartItems) return;
        
        if (this.cart.length === 0) {
            if (emptyCart) emptyCart.classList.remove('hidden');
            if (cartSummary) cartSummary.classList.add('hidden');
            if (checkoutBtn) checkoutBtn.classList.add('hidden');
            return;
        }
        
        if (emptyCart) emptyCart.classList.add('hidden');
        if (cartSummary) cartSummary.classList.remove('hidden');
        if (checkoutBtn) checkoutBtn.classList.remove('hidden');
        
        cartItems.innerHTML = this.cart.map(item => this.createCartItemHTML(item)).join('');
        
        // Event listeners para los botones del carrito
        this.addCartEventListeners();
        
        // Actualizar resumen
        this.updateCartSummary();
    }

    createCartItemHTML(item) {
        return `
            <div class="cart-item flex items-center space-x-4 p-4 bg-gray-50 rounded-lg" data-id="${item.id}">
                <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-md">
                <div class="flex-1 min-w-0">
                    <h3 class="text-sm font-medium text-gray-900 truncate">${item.name}</h3>
                    <p class="text-sm text-gray-500">$${item.price.toLocaleString()}</p>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <button class="quantity-btn minus w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-colors">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </button>
                            <span class="quantity text-sm font-medium w-8 text-center">${item.quantity}</span>
                            <button class="quantity-btn plus w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-colors">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">$${(item.price * item.quantity).toLocaleString()}</p>
                            <button class="remove-item text-xs text-red-500 hover:text-red-700 transition-colors">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    addCartEventListeners() {
        // Botones de cantidad
        document.querySelectorAll('.quantity-btn.minus').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const itemId = parseInt(e.target.closest('.cart-item').dataset.id);
                const item = this.cart.find(item => item.id === itemId);
                if (item) {
                    this.updateQuantity(itemId, item.quantity - 1);
                }
            });
        });
        
        document.querySelectorAll('.quantity-btn.plus').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const itemId = parseInt(e.target.closest('.cart-item').dataset.id);
                const item = this.cart.find(item => item.id === itemId);
                if (item) {
                    this.updateQuantity(itemId, item.quantity + 1);
                }
            });
        });
        
        // Botones de eliminar
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const itemId = parseInt(e.target.closest('.cart-item').dataset.id);
                this.removeFromCart(itemId);
            });
        });
    }

    updateCartSummary() {
        const subtotal = this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        const shipping = subtotal > 50000 ? 0 : 5000;
        const discount = 0; // Implementar lógica de cupones
        const total = subtotal + shipping - discount;
        
        const subtotalEl = document.getElementById('cart-subtotal');
        const shippingEl = document.getElementById('cart-shipping');
        const discountEl = document.getElementById('cart-discount');
        const totalEl = document.getElementById('cart-total');
        
        if (subtotalEl) subtotalEl.textContent = `$${subtotal.toLocaleString()}`;
        if (shippingEl) shippingEl.textContent = `$${shipping.toLocaleString()}`;
        if (discountEl) discountEl.textContent = `-$${discount.toLocaleString()}`;
        if (totalEl) totalEl.textContent = `$${total.toLocaleString()}`;
    }

    // Funciones de UI
    toggleCart() {
        const sidebar = document.getElementById('cart-sidebar');
        const overlay = document.getElementById('cart-overlay');
        
        if (sidebar) sidebar.classList.toggle('open');
        if (overlay) overlay.classList.toggle('hidden');
        
        if (sidebar && sidebar.classList.contains('open')) {
            this.updateCartDisplay();
        }
    }

    toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu) menu.classList.toggle('hidden');
    }

    toggleUserMenu() {
        const dropdown = document.getElementById('user-dropdown');
        if (dropdown) dropdown.classList.toggle('hidden');
    }

    toggleWishlist(productId) {
        // Implementar funcionalidad de wishlist
        this.showNotification('Funcionalidad de favoritos próximamente');
    }

    applyCoupon() {
        const couponInput = document.getElementById('coupon-code');
        const messageEl = document.getElementById('coupon-message');
        
        if (!couponInput || !messageEl) return;
        
        const code = couponInput.value.trim().toUpperCase();
        
        // Cupones de ejemplo
        const coupons = {
            'DULCESAR10': 10,
            'BIENVENIDA15': 15,
            'FIDELIDAD20': 20
        };
        
        if (coupons[code]) {
            messageEl.textContent = `¡Cupón aplicado! ${coupons[code]}% de descuento`;
            messageEl.className = 'text-sm text-green-600';
            messageEl.classList.remove('hidden');
        } else {
            messageEl.textContent = 'Cupón inválido';
            messageEl.className = 'text-sm text-red-600';
            messageEl.classList.remove('hidden');
        }
    }

    proceedToCheckout() {
        if (this.cart.length === 0) {
            this.showNotification('Tu carrito está vacío');
            return;
        }
        
        // Implementar checkout
        this.showNotification('Funcionalidad de checkout próximamente');
    }

    handleOutsideClick(e) {
        // Cerrar dropdowns al hacer clic fuera
        if (!e.target.closest('#user-menu-btn')) {
            const dropdown = document.getElementById('user-dropdown');
            if (dropdown) dropdown.classList.add('hidden');
        }
        
        if (!e.target.closest('#cart-sidebar') && !e.target.closest('#cart-btn')) {
            const sidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('cart-overlay');
            if (sidebar) sidebar.classList.remove('open');
            if (overlay) overlay.classList.add('hidden');
        }
    }

    showNotification(message) {
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
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    new DulcesarEcommerce();
}); 
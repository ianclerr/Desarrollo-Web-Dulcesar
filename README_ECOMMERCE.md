# 🍯 Dulcesar Ecommerce - Documentación

## Descripción

Ecommerce completo y funcional para Dulcesar, una empresa de dulces artesanales. Desarrollado con Laravel Blade, Tailwind CSS y JavaScript vanilla.

## 🚀 Características

### ✨ Funcionalidades Principales

- **🏠 Página de inicio moderna** con hero section y categorías
- **🛍️ Catálogo de productos** con filtros y búsqueda
- **🛒 Carrito de compras** funcional con persistencia local
- **📱 Diseño responsive** para móviles y desktop
- **🎨 UI/UX moderna** con animaciones y transiciones
- **🔍 Búsqueda en tiempo real** de productos
- **🏷️ Sistema de cupones** de descuento
- **⭐ Wishlist** (funcionalidad preparada)
- **📧 Newsletter** integrado

### 🛠️ Tecnologías Utilizadas

- **Backend**: Laravel 10 (Blade Templates)
- **Frontend**: Tailwind CSS + JavaScript Vanilla
- **Almacenamiento**: LocalStorage para carrito
- **Iconos**: Heroicons (SVG)
- **Fuentes**: Figtree (Google Fonts)

## 📁 Estructura del Proyecto

```
resources/views/ecommerce/
├── layouts/
│   ├── app.blade.php          # Layout principal
│   ├── header.blade.php       # Header con navegación
│   ├── footer.blade.php       # Footer completo
│   └── sidebar.blade.php      # Sidebar móvil
├── partials/
│   └── cart.blade.php         # Componente del carrito
└── home.blade.php             # Página principal

public/js/
└── ecommerce.js              # JavaScript principal

public/images/
├── logos/
│   └── dulcesar.png          # Logo principal
└── imagenes/
    ├── mermelada.jpg         # Imágenes de productos
    └── cuadrille tipo 1.jpeg.jpg
```

## 🎯 Funcionalidades Detalladas

### 1. Sistema de Productos

**Productos incluidos:**
- Mermelada de Fresa ($15.000)
- Dulce de Leche ($21.000)
- Jalea de Mora ($12.000)
- Conserva de Durazno ($18.000)
- Mermelada de Mango ($14.000)
- Dulce de Guayaba ($16.000)
- Jalea de Manzana ($13.000)
- Conserva de Piña ($17.000)

**Características de cada producto:**
- Nombre y descripción
- Precio original y con descuento
- Categoría (mermeladas, dulces, jaleas, conservas)
- Imagen del producto
- Peso del producto
- Calificación y número de reseñas
- Estado de stock

### 2. Filtros y Búsqueda

**Filtros por categoría:**
- Mermeladas
- Dulces
- Jaleas
- Conservas

**Filtros por precio:**
- $0 - $10.000
- $10.000 - $20.000
- $20.000 - $50.000
- Más de $50.000

**Ordenamiento:**
- Nombre A-Z
- Nombre Z-A
- Precio: Menor a Mayor
- Precio: Mayor a Menor
- Más Populares

**Búsqueda:**
- Búsqueda en tiempo real
- Busca por nombre, descripción y categoría

### 3. Carrito de Compras

**Funcionalidades:**
- Agregar productos al carrito
- Modificar cantidades
- Eliminar productos
- Cálculo automático de totales
- Persistencia en localStorage
- Resumen de compra
- Cálculo de envío (gratis > $50.000)

**Cupones de descuento:**
- DULCESAR10 (10% descuento)
- BIENVENIDA15 (15% descuento)
- FIDELIDAD20 (20% descuento)

### 4. Diseño Responsive

**Breakpoints:**
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

**Características móviles:**
- Menú hamburguesa
- Carrito lateral
- Búsqueda adaptada
- Filtros colapsables

## 🎨 Paleta de Colores

```css
/* Colores Dulcesar */
--dulcesar-50: #fef7ee
--dulcesar-100: #fdedd6
--dulcesar-200: #fad7ac
--dulcesar-300: #f6bb77
--dulcesar-400: #f1943d
--dulcesar-500: #ed7516
--dulcesar-600: #de5a0c
--dulcesar-700: #b8440c
--dulcesar-800: #933612
--dulcesar-900: #762e12
```

## 🚀 Instalación y Uso

### 1. Requisitos Previos
- Laravel 10+
- PHP 8.1+
- Node.js (para compilar assets)

### 2. Configuración

```bash
# Clonar el proyecto
git clone [url-del-repositorio]

# Instalar dependencias
composer install
npm install

# Configurar variables de entorno
cp .env.example .env
php artisan key:generate

# Compilar assets
npm run dev

# Ejecutar servidor
php artisan serve
```

### 3. Acceder al Ecommerce

Visitar: `http://localhost:8000/ecommerce/home`

## 📱 Uso del Ecommerce

### Navegación Principal
1. **Header**: Logo, búsqueda, carrito, menú usuario
2. **Navegación**: Categorías principales
3. **Hero Section**: Información principal y CTA
4. **Categorías**: Tarjetas de categorías principales

### Compra de Productos
1. **Explorar**: Usar filtros y búsqueda
2. **Agregar**: Hacer clic en "Agregar" en cualquier producto
3. **Carrito**: Ver carrito lateral
4. **Modificar**: Cambiar cantidades o eliminar
5. **Cupón**: Aplicar código de descuento
6. **Checkout**: Proceder al pago (funcionalidad preparada)

### Funcionalidades Adicionales
- **Wishlist**: Botón de corazón en productos
- **Newsletter**: Suscripción en footer
- **Redes sociales**: Enlaces en footer
- **Contacto**: Información de contacto completa

## 🔧 Personalización

### Agregar Nuevos Productos

Editar el array de productos en `public/js/ecommerce.js`:

```javascript
getProducts() {
    return [
        {
            id: 9,
            name: "Nuevo Producto",
            description: "Descripción del producto",
            price: 20000,
            originalPrice: 20000,
            category: "mermeladas",
            image: "/images/imagenes/nuevo-producto.jpg",
            inStock: true,
            rating: 4.5,
            reviews: 10,
            weight: "300g"
        }
        // ... más productos
    ];
}
```

### Modificar Estilos

Los estilos están en Tailwind CSS. Para personalizar:

1. **Colores**: Modificar en `resources/views/ecommerce/layouts/app.blade.php`
2. **Componentes**: Editar clases en los archivos Blade
3. **Animaciones**: Modificar en el CSS personalizado

### Agregar Categorías

1. Agregar en el array de productos
2. Actualizar filtros en `home.blade.php`
3. Agregar en navegación del header

## 🐛 Solución de Problemas

### Carrito no funciona
- Verificar que `ecommerce.js` esté cargado
- Revisar consola del navegador
- Verificar localStorage

### Imágenes no cargan
- Verificar rutas en `public/images/`
- Comprobar permisos de archivos
- Verificar nombres de archivos

### Estilos no aplican
- Verificar que Tailwind CSS esté cargado
- Comprobar clases CSS
- Revisar configuración de Tailwind

## 📈 Próximas Mejoras

### Funcionalidades Planificadas
- [ ] Sistema de usuarios y autenticación
- [ ] Proceso de checkout completo
- [ ] Sistema de reseñas y calificaciones
- [ ] Integración con pasarelas de pago
- [ ] Panel de administración
- [ ] Sistema de inventario
- [ ] Notificaciones push
- [ ] Chat en vivo

### Optimizaciones Técnicas
- [ ] Lazy loading de imágenes
- [ ] PWA (Progressive Web App)
- [ ] SEO optimizado
- [ ] Cache de productos
- [ ] API REST para productos
- [ ] Base de datos real

## 📞 Soporte

Para soporte técnico o consultas:
- Email: info@dulcesar.com
- Teléfono: +57 300 123 4567

## 📄 Licencia

Este proyecto es propiedad de Dulcesar. Todos los derechos reservados.

---

**Desarrollado con ❤️ para Dulcesar** 
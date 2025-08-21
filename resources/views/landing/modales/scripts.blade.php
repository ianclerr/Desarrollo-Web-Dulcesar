<script>
// Funciones para manejar los modales
function openModal(modalId) {
    console.log('Intentando abrir modal:', modalId);
    const modal = document.getElementById(modalId);
    const modalContent = document.getElementById(modalId + '-content');
    
    console.log('Modal encontrado:', modal);
    console.log('Modal content encontrado:', modalContent);
    
    if (modal && modalContent) {
        modal.classList.remove('hidden');
        
        // Animación de entrada
        setTimeout(() => {
            modalContent.style.opacity = '1';
            modalContent.style.transform = 'scale(1)';
        }, 10);
        
        // Prevenir scroll del body
        document.body.style.overflow = 'hidden';
        console.log('Modal abierto exitosamente:', modalId);
    } else {
        console.error('No se pudo encontrar el modal o su contenido:', modalId);
    }
}

function closeModal(modalId) {
    console.log('Cerrando modal:', modalId);
    const modal = document.getElementById(modalId);
    const modalContent = document.getElementById(modalId + '-content');
    
    if (modal && modalContent) {
        // Animación de salida
        modalContent.style.opacity = '0';
        modalContent.style.transform = 'scale(0.95)';
        
        setTimeout(() => {
            modal.classList.add('hidden');
            // Restaurar scroll del body
            document.body.style.overflow = 'auto';
        }, 300);
    }
}

// Cerrar modal al hacer clic fuera del contenido
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM cargado, configurando modales...');
    const modals = ['aderezos-modal', 'granos-modal', 'todos-modal', 'test-modal', 'jugos-modal', 'mermeladas-modal'];
    
    modals.forEach(modalId => {
        const modal = document.getElementById(modalId);
        console.log('Configurando modal:', modalId, 'encontrado:', !!modal);
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal(modalId);
                }
            });
        }
    });
    
    // Cerrar modal con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modals.forEach(modalId => {
                const modal = document.getElementById(modalId);
                if (modal && !modal.classList.contains('hidden')) {
                    closeModal(modalId);
                }
            });
        }
    });
    
    console.log('Modales configurados correctamente');
});

// Función para abrir modal específico desde los botones
function openAderezosModal() {
    console.log('Función openAderezosModal llamada');
    openModal('aderezos-modal');
}

function openGranosModal() {
    console.log('Función openGranosModal llamada');
    openModal('granos-modal');
}

function openTodosModal() {
    console.log('Función openTodosModal llamada');
    openModal('todos-modal');
}

function openJugosModal() {
    console.log('Función openJugosModal llamada');
    openModal('jugos-modal');
}

function openMermeladasModal() {
    console.log('Función openMermeladasModal llamada');
    openModal('mermeladas-modal');
}

// Verificar que las funciones estén disponibles globalmente
window.openModal = openModal;
window.closeModal = closeModal;
window.openAderezosModal = openAderezosModal;
window.openGranosModal = openGranosModal;
window.openTodosModal = openTodosModal;
window.openJugosModal = openJugosModal;
window.openMermeladasModal = openMermeladasModal;
window.openTestModal = function() {
    console.log('Función openTestModal llamada');
    openModal('test-modal');
};

console.log('Scripts de modales cargados');
</script> 
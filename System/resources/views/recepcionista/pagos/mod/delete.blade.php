<div id="deleteModal" class="modal-overlay">
    <div class="modal-content">
        <button type="button" class="modal-close" onclick="closeDeleteModal()">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <div class="modal-icon warning pulse-animation">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
            </div>
            <h3>¿Eliminar este pago?</h3>
            <p class="modal-subtitle">Esta acción es irreversible y eliminará el registro financiero.</p>
        </div>

        <div class="modal-body">
            <!-- Target Preview Card -->
            <div class="target-card">
                <div class="target-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="target-details">
                    <span class="target-label">Se eliminará el pago de:</span>
                    <h4 id="deleteItemName">Cliente Name</h4>
                    <div class="target-meta">
                        <span class="meta-tag"><i class="fas fa-hashtag"></i> <span id="deleteItemCI">Ref</span></span>
                        <span class="meta-tag"><i class="fas fa-dollar-sign"></i> <span id="deleteItemCode">Monto</span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn-cancel" onclick="closeDeleteModal()">
                <span>Cancelar</span>
            </button>
            <form id="deleteForm" action="" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete-confirm">
                    <i class="fas fa-trash-alt"></i>
                    <span>Confirmar Eliminación</span>
                </button>
            </form>
        </div>
    </div>
</div>

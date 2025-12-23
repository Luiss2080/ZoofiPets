<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-truck" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Eliminar Proveedor?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se eliminará al proveedor <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Toda la información asociada dejará de estar disponible.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Conservar</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Eliminar Proveedor</button>
            </form>
        </div>
    </div>
</div>

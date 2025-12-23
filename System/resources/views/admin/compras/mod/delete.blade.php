<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-shopping-cart" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Anular Compra?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se anulará la compra <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Esta acción puede afectar al inventario recibido.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Mantener</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Anular Compra</button>
            </form>
        </div>
    </div>
</div>

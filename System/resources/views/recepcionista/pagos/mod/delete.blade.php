<div id="deleteModal" class="modal-overlay"> <!-- ID matches confirmar.js -->
    <div class="modal-container"> <!-- Class matches confirming.css -->
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-trash-alt" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Eliminar Pago?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se eliminará el registro de pago de <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Esta acción no se puede deshacer.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Cancelar</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Confirmar Eliminación</button>
            </form>
        </div>
    </div>
</div>

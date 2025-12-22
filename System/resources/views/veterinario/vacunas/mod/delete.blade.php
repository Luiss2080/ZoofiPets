<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-syringe" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Eliminar Registro?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se eliminará el registro de vacunación de <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Esta acción es irreversible y afectará el historial de vacunación.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Mantener</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Eliminar Registro</button>
            </form>
        </div>
    </div>
</div>

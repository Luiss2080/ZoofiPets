<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-prescription-bottle-alt" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Cancelar Consulta?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se cancelará la consulta de <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Esta acción no se puede deshacer.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Mantener</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Confirmar Cancelación</button>
            </form>
        </div>
    </div>
</div>

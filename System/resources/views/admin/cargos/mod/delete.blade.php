<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-briefcase" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Eliminar Cargo?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se eliminará el cargo <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Esto puede afectar a empleados asignados a este cargo.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Cancelar</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Eliminar Cargo</button>
            </form>
        </div>
    </div>
</div>

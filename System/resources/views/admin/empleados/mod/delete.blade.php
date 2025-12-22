<div id="deleteModal" class="modal-overlay"> <!-- Reference ID shared logic -->
    <div class="modal-container"> 
        <div class="modal-header">
            <div class="modal-icon-wrapper">
                <i class="fas fa-user-tie" style="font-size: 1.5rem;"></i>
            </div>
            <h3 class="modal-title">¿Desvincular Empleado?</h3>
        </div>
        
        <div class="modal-body">
            <p>Se dará de baja al empleado <span id="deleteItemName" style="color: #fff; font-weight: 700;"></span>.</p>
            <p class="text-sm">Podrá acceder al historial pero no realizar nuevas acciones.</p>
        </div>

        <div class="modal-actions">
            <button type="button" class="btn-modal btn-modal-cancel" id="cancelDeleteBtn">Cancelar</button>
            <form id="deleteForm" action="" method="POST" style="display: inline; flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-modal btn-modal-confirm" id="confirmDeleteBtn">Desvincular</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Legal Reutilizable -->
<div id="legalModal" class="legal-modal" style="display:none;">
    <div class="legal-modal-content">
        <span class="legal-modal-close" onclick="closeLegalModal()">&times;</span>
        <h2 id="legalModalTitle"></h2>
        <div id="legalModalBody" class="legal-modal-body"></div>
        <button onclick="exportLegalToPDF()" class="btn btn-primary">Exportar a PDF</button>
    </div>
</div>

<style>
.legal-modal { position: fixed; z-index: 9999; left: 0; top: 0; width: 100vw; height: 100vh; overflow: auto; background: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; }
.legal-modal-content { background: #fff; padding: 2rem; border-radius: 8px; max-width: 700px; width: 90vw; max-height: 90vh; overflow-y: auto; position: relative; }
.legal-modal-close { position: absolute; right: 1rem; top: 1rem; font-size: 2rem; cursor: pointer; }
.legal-modal-body { margin-top: 1rem; }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="{{ asset('legal/legal-modal.js') }}"></script>

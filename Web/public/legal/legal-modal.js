// legal-modal.js
function openLegalModal(title, contentHtml) {
    document.getElementById('legalModalTitle').innerText = title;
    document.getElementById('legalModalBody').innerHTML = contentHtml;
    document.getElementById('legalModal').style.display = 'flex';
}

function closeLegalModal() {
    document.getElementById('legalModal').style.display = 'none';
}

function exportLegalToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({ unit: 'pt', format: 'a4' });
    const title = document.getElementById('legalModalTitle').innerText;
    const content = document.getElementById('legalModalBody').innerText;
    doc.setFontSize(18);
    doc.text(title, 40, 50);
    doc.setFontSize(12);
    doc.text(content, 40, 80, { maxWidth: 515 });
    doc.save(title.replace(/\s+/g, '_').toLowerCase() + '.pdf');
}

// Utilidad para cargar el contenido desde archivos Blade (AJAX)
function showLegalFromUrl(title, url) {
    fetch(url)
        .then(resp => resp.text())
        .then(html => {
            openLegalModal(title, html);
        });
}

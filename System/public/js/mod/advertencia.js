/**
 * WARNING MODAL LOGIC
 * Standardized SweetAlert2 configuration for warning alerts.
 */

window.showWarning = function (
    title = "Advertencia",
    text = "Algo requiere tu atención."
) {
    Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Entendido",
        cancelButtonText: "Cerrar",

        customClass: {
            popup: "animated fadeInDown faster dashboard-modal-popup",
            confirmButton: "swal2-confirm",
            cancelButton: "swal2-cancel",
        },
        buttonsStyling: false,
    });
};

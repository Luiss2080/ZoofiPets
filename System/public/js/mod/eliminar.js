/**
 * DELETE MODAL LOGIC
 * Standardized SweetAlert2 configuration for delete operations.
 */

window.confirmDelete = function (
    url,
    title = "¿Estás seguro?",
    text = "No podrás revertir esto."
) {
    Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",

        // Custom Classes for CSS Styling
        customClass: {
            popup: "animated fadeInDown faster dashboard-modal-popup",
            confirmButton: "swal2-confirm",
            cancelButton: "swal2-cancel",
        },
        buttonsStyling: false, // Important to let CSS take control
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById("delete-form");
            if (form) {
                form.action = url;
                form.submit();
            } else {
                console.error("Delete form not found!");
            }
        }
    });
};

// Check for success session message
document.addEventListener("DOMContentLoaded", function () {
    const successInput = document.getElementById("session-success-message");
    if (successInput && successInput.value) {
        Swal.fire({
            icon: "success",
            title: "¡Éxito!",
            text: successInput.value,
            customClass: {
                popup: "dashboard-modal-popup",
                confirmButton: "swal2-confirm",
            },
            buttonsStyling: false,
        });
    }
});

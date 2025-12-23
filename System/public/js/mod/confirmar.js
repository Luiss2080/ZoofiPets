/**
 * CONFIRM MODAL LOGIC
 * Standardized SweetAlert2 configuration for confirmation operations.
 */

window.confirmAction = function (
    formId,
    title = "¿Estás seguro?",
    text = "Confirma para continuar."
) {
    Swal.fire({
        title: title,
        text: text,
        icon: "question",
        showCancelButton: true,
        confirmButtonText: "Sí, continuar",
        cancelButtonText: "Cancelar",

        customClass: {
            popup: "animated fadeInDown faster dashboard-modal-popup",
            confirmButton: "swal2-confirm",
            cancelButton: "swal2-cancel",
        },
        buttonsStyling: false,
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(formId);
            if (form) {
                form.submit();
            } else {
                console.error("Form not found: " + formId);
            }
        }
    });
};

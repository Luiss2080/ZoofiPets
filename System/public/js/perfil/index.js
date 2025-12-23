/**
 * Profile Page Interactivity
 */

document.addEventListener("DOMContentLoaded", function () {
    // 1. Password Visibility Toggle
    const toggleButtons = document.querySelectorAll(".toggle-password");

    toggleButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const input = this.previousElementSibling;
            const icon = this.querySelector("i");

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });
    });

    // 2. Avatar Preview
    // 2. Avatar Upload with AJAX
    const avatarInput = document.getElementById("avatarInput");
    const avatarPreview = document.querySelector(".profile-avatar");

    if (avatarInput && avatarPreview) {
        avatarInput.addEventListener("change", function (e) {
            const file = e.target.files[0];
            if (!file) return;

            // Preview immediately
            const reader = new FileReader();
            reader.onload = function (e) {
                avatarPreview.src = e.target.result;
            };
            reader.readAsDataURL(file);

            // Upload via AJAX
            const formData = new FormData();
            formData.append("avatar", file);

            // Get CSRF Token
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                ?.getAttribute("content");

            fetch("/perfil/avatar", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                    Accept: "application/json", // Ensure backend knows we want JSON
                },
                body: formData,
            })
                .then(async (response) => {
                    if (!response.ok) {
                        const text = await response.text();
                        console.error("Server Error:", text);
                        throw new Error(`Server returned ${response.status}`);
                    }
                    return response.json();
                })
                .then((data) => {
                    if (data.success) {
                        console.log("Avatar updated successfully");
                        // Optional: Reload to ensure backend state matches if needed, or just show toast
                    } else {
                        alert(
                            "Error: " +
                                (data.message ||
                                    "Error desconocido al subir la imagen")
                        );
                    }
                })
                .catch((error) => {
                    console.error("Error Details:", error);
                    alert(
                        "Error al subir imagen. Revisa la consola para más detalles. Posiblemente la imagen sea muy grande (>2MB)."
                    );
                });
        });
    }

    // 3. Form Animations
    const cards = document.querySelectorAll(".settings-card");
    cards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
            card.style.transition = "opacity 0.5s ease, transform 0.5s ease";
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, 100 * (index + 1));
    });
});

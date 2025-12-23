/* JS logic for Clientes Index (Custom Dropdown) */
document.addEventListener("DOMContentLoaded", function () {
    // Custom Dropdown Functionality
    const dropdown = document.getElementById("entriesDropdown");

    if (dropdown) {
        const trigger = dropdown.querySelector(".custom-select-trigger");
        const options = dropdown.querySelectorAll(".custom-option");
        const input = document.getElementById("entriesInput");
        const textParams = document.getElementById("entriesText");

        // Toggle Dropdown
        trigger.addEventListener("click", function (e) {
            e.stopPropagation();
            dropdown.classList.toggle("open");
        });

        // Select Option
        options.forEach((option) => {
            option.addEventListener("click", function () {
                // UI Updates
                options.forEach((opt) => opt.classList.remove("selected"));
                this.classList.add("selected");

                const value = this.getAttribute("data-value");
                const text = this.textContent;

                if (input) input.value = value;
                if (textParams) textParams.textContent = text;

                dropdown.classList.remove("open");

                // Reload Page with new Param
                const url = new URL(window.location.href);
                url.searchParams.set("per_page", value);
                url.searchParams.set("page", 1); // Reset to page 1
                window.location.href = url.toString();
            });
        });

        // Close on outside click
        document.addEventListener("click", function (e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove("open");
            }
        });
    }

    // Success Message handled in mod/eliminar.js?
    // Wait, mod/eliminar.js handles the success popup. We can leave this file clean or for other logic.
    // The previous code had session success check here, but now it's in mod/eliminar.js.
    // We will keep this file focused on the Dropdown logic.
});

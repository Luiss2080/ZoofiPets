/**
 * Header Logic for ZoofiPets
 * Handles Dropdowns (Profile, Notifications, Quick Actions)
 */

document.addEventListener("DOMContentLoaded", function () {
    // Helper to setup dropdowns
    function setupDropdown(toggleId, dropdownId) {
        const toggle = document.getElementById(toggleId);
        const dropdown = document.getElementById(dropdownId);

        if (!toggle || !dropdown) return;

        toggle.addEventListener("click", function (e) {
            e.stopPropagation();
            const isVisible = dropdown.classList.contains("show"); // Changed to match CSS

            // Close all other dropdowns
            closeAllDropdowns();

            if (!isVisible) {
                dropdown.classList.add("show"); // Changed to match CSS
                toggle.setAttribute("aria-expanded", "true");
            }
        });

        // Click inside dropdown shouldn't close it
        dropdown.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

    function closeAllDropdowns() {
        document.querySelectorAll(".show").forEach((d) => {
            // Changed to match CSS
            d.classList.remove("show");
        });
        document.querySelectorAll('[aria-expanded="true"]').forEach((t) => {
            t.setAttribute("aria-expanded", "false");
        });
    }

    // Helper: Close when clicking outside
    document.addEventListener("click", function () {
        closeAllDropdowns();
    });

    // Initialize Dropdowns
    setupDropdown("profileDropdownToggle", "profileDropdown");
    setupDropdown("notificationToggle", "notificationDropdown");
    setupDropdown("quickActionsToggle", "quickActionsDropdown");
});

/* JS logic for Clientes Index (JSON AJAX Search) */
document.addEventListener("DOMContentLoaded", function () {
    // ==========================================
    // 1. CUSTOM DROPDOWN
    // ==========================================
    const dropdown = document.getElementById("entriesDropdown");
    if (dropdown) {
        const trigger = dropdown.querySelector(".custom-select-trigger");
        const options = dropdown.querySelectorAll(".custom-option");
        const input = document.getElementById("entriesInput");
        const textParams = document.getElementById("entriesText");

        trigger.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("open");
        });

        options.forEach((option) => {
            option.addEventListener("click", function () {
                options.forEach((opt) => opt.classList.remove("selected"));
                this.classList.add("selected");
                const value = this.getAttribute("data-value");
                if (input) input.value = value;
                if (textParams) textParams.textContent = this.textContent;
                dropdown.classList.remove("open");
                updateData("per_page", value, true);
            });
        });

        document.addEventListener("click", (e) => {
            if (!dropdown.contains(e.target)) dropdown.classList.remove("open");
        });
    }

    // ==========================================
    // 2. SEARCH BAR (JSON AJAX)
    // ==========================================
    const searchInput = document.getElementById("searchInput");
    let searchTimeout;

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            clearTimeout(searchTimeout);
            const value = this.value.trim();
            searchTimeout = setTimeout(() => {
                updateData("search", value, true);
            }, 300); // Fast 300ms debounce
        });

        // Populate from URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has("search"))
            searchInput.value = urlParams.get("search");
    }

    // ==========================================
    // 3. DATA FETCHING & RENDERING
    // ==========================================
    function updateData(key, value, resetPage = false) {
        const url = new URL(window.location.href);

        // Update URL object
        if (value !== null && value !== "") {
            url.searchParams.set(key, value);
        } else {
            url.searchParams.delete(key);
        }

        if (resetPage) url.searchParams.set("page", 1);

        // Fetch JSON
        fetch(url.toString(), {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json",
            },
        })
            .then((res) => res.json())
            .then((response) => {
                if (response.success) {
                    renderTable(response.data);
                    renderPagination(response.links);
                    // Update Browser URL silently
                    window.history.pushState({}, "", url.toString());
                }
            })
            .catch(console.error);
    }

    function renderTable(data) {
        const tbody = document.getElementById("clientesTableBody");
        tbody.innerHTML = ""; // Clear current

        if (data.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="5" class="text-center" style="padding: 3rem; color: var(--text-muted);">
                        No se encontraron clientes registrados
                    </td>
                </tr>`;
            return;
        }

        // Build Rows
        data.forEach((client) => {
            // Helpers
            const initials = (
                client.nombre.charAt(0) + client.apellido.charAt(0)
            ).toUpperCase();
            const fullName = `${client.nombre} ${client.apellido}`;
            const email = client.email || "Sin email";
            const phone = client.telefono || "N/A";
            const address = client.direccion
                ? client.direccion.length > 30
                    ? client.direccion.substring(0, 30) + "..."
                    : client.direccion
                : "N/A";

            // Routes (using global 'routes' object from Blade)
            // Fallback if routes obj missing (safety)
            const showUrl = window.routes ? window.routes.show(client.id) : "#";
            const editUrl = window.routes ? window.routes.edit(client.id) : "#";
            const deleteAction = window.routes
                ? window.routes.destroy(client.id)
                : "#";

            const row = `
                <tr>
                    <td>
                        <div class="user-info">
                            <div class="avatar-circle">${initials}</div>
                            <div class="details">
                                <span class="name">${fullName}</span>
                                <span class="role">${email}</span>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge-id">${client.cedula}</span></td>
                    <td>
                        <span class="contact-info">
                            <i class="fas fa-phone-alt"></i> ${phone}
                        </span>
                    </td>
                    <td><span class="address-text">${address}</span></td>
                    <td>
                        <div class="action-buttons">
                            <a href="${showUrl}" class="btn-icon view" title="Ver Detalles">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="${editUrl}" class="btn-icon edit" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" 
                                    class="btn-icon delete" 
                                    onclick="confirmDelete('${deleteAction}')" 
                                    title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;

            tbody.insertAdjacentHTML("beforeend", row);
        });
    }

    function renderPagination(html) {
        const wrapper = document.getElementById("paginationWrapper");
        if (wrapper) wrapper.innerHTML = html;
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // --- Chart 1: Citas Mensuales (was Attendance) ---
    const ctxAttendance = document.getElementById("attendanceChart");
    if (ctxAttendance) {
        new Chart(ctxAttendance, {
            type: "line",
            data: {
                labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
                datasets: [
                    {
                        label: "Citas Atendidas",
                        data: [12, 19, 15, 25, 22, 30],
                        borderColor: "#4834d4", // ZoofiPets Purple
                        tension: 0.4,
                        fill: true,
                        backgroundColor: "rgba(72, 52, 212, 0.1)",
                    },
                ],
            },
            options: { responsive: true, maintainAspectRatio: false },
        });
    }

    // --- Chart 2: Actividad Global (Ventas vs Compras) ---
    const ctxActivity = document.getElementById("activityGlobalChart");
    if (ctxActivity) {
        new Chart(ctxActivity, {
            type: "bar",
            data: {
                labels: ["Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                datasets: [
                    {
                        label: "Ventas",
                        data: [65, 59, 80, 81, 56, 55],
                        backgroundColor: "#10b981", // Emerald
                    },
                    {
                        label: "Compras",
                        data: [28, 48, 40, 19, 86, 27],
                        backgroundColor: "#ef4444", // Red
                    },
                ],
            },
            options: { responsive: true, maintainAspectRatio: false },
        });
    }

    // --- Chart 3: Distribución (Roles) ---
    const ctxRoles = document.getElementById("userRolesChart");
    if (ctxRoles && window.appConfig && window.appConfig.roleDistribution) {
        const dist = window.appConfig.roleDistribution;
        new Chart(ctxRoles, {
            type: "doughnut",
            data: {
                labels: ["Admin", "Veterinario", "Recepción"],
                datasets: [
                    {
                        data: [
                            dist.admin || 0,
                            dist.docente || 0, // Mapping 'docente' to Veterinario (legacy naming)
                            dist.estudiante || 0, // Mapping 'estudiante' to Recepción (legacy naming)
                        ],
                        backgroundColor: [
                            "#3b82f6", // Admin - Blue
                            "#a855f7", // Vet - Purple
                            "#10b981", // Recep - Green
                        ],
                        borderWidth: 0,
                        hoverOffset: 4,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: "75%",
                plugins: {
                    legend: {
                        display: false, // Using custom HTML legend
                    },
                    tooltip: {
                        backgroundColor: document.body.classList.contains(
                            "dark-mode"
                        )
                            ? "#000"
                            : "#fff",
                        titleColor: document.body.classList.contains(
                            "dark-mode"
                        )
                            ? "#fff"
                            : "#000",
                        bodyColor: document.body.classList.contains("dark-mode")
                            ? "#fff"
                            : "#000",
                        borderColor: "rgba(255,255,255,0.1)",
                        borderWidth: 1,
                    },
                },
            },
        });
    }

    // --- Chart 4: Promedios (Productos Top) ---
    const ctxGrades = document.getElementById("gradesBarChart");
    if (ctxGrades) {
        new Chart(ctxGrades, {
            type: "doughnut",
            data: {
                labels: ["Alimento Perro", "Vacunas", "Juguetes"],
                datasets: [
                    {
                        data: [300, 50, 100],
                        backgroundColor: ["#f59e0b", "#3b82f6", "#ec4899"],
                    },
                ],
            },
            options: { responsive: true, maintainAspectRatio: false },
        });
    }

    // --- Chart 5: Recursos (Pacientes por Especie) ---
    const ctxResources = document.getElementById("resourcesBarChart");
    if (ctxResources) {
        new Chart(ctxResources, {
            type: "pie",
            data: {
                labels: ["Perros", "Gatos", "Aves", "Otros"],
                datasets: [
                    {
                        data: [15, 10, 5, 2],
                        backgroundColor: [
                            "#6366f1",
                            "#8b5cf6",
                            "#d946ef",
                            "#9ca3af",
                        ],
                    },
                ],
            },
            options: { responsive: true, maintainAspectRatio: false },
        });
    }
});

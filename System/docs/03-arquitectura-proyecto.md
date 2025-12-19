# Arquitectura del Proyecto

El proyecto **ZoofiPets** está organizado en dos módulos principales dentro del repositorio.

## Estructura General

### 1. `System/` (Backend & Panel Admin)

Esta es la aplicación principal de gestión (ERP/CRM veterinario).

-   **Framework**: Laravel (PHP).
-   **Propósito**: Manejo de inventario, citas, expedientes médicos, usuarios, y administración general.
-   **Frontend Admin**: Blade Templates + CSS personalizado / Bootstrap / Tailwind (según implementación).

### 2. `Web/` (Sitio Público / Landing)

Esta carpeta contiene el sitio web público visible para los clientes.

-   **Propósito**: Página de inicio, información de contacto, blog, login para clientes.
-   **Tecnología**: Laravel (o estructura similar separada).

## Estructura de Carpetas en `System`

-   **app/**: Contiene la lógica de negocio.
    -   `Models/`: Modelos Eloquent interactuando con la BD.
    -   `Http/Controllers/`: Controladores que manejan las peticiones.
-   **database/**:
    -   `migrations/`: Estructura de tablas.
    -   `seeders/`: Datos iniciales de prueba.
-   **resources/**:
    -   `views/`: Vistas HTML/Blade.
    -   `css/`, `js/`: Archivos fuente del frontend.
-   **routes/**:
    -   `web.php`: Rutas del navegador.
    -   `api.php`: Rutas de API (si aplica).

## Tecnologías

-   **Backend**: PHP 8.2+, Laravel.
-   **Base de Datos**: MySQL.
-   **Frontend Build Tool**: Vite.

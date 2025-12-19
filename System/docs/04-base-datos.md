# Base de Datos

El sistema utiliza una base de datos relacional (MySQL) gestionada a través de Eloquent ORM de Laravel.

## Configuración

La conexión se define en el archivo `.env`. Asegúrate de que las credenciales coincidan con tu gestor de BD local (HeidiSQL, phpMyAdmin, DBeaver, etc.).

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zoofipets
DB_USERNAME=root
DB_PASSWORD=
```

## Modelo de Datos (Principales Tablas)

El sistema gestiona, entre otras, las siguientes entidades:

-   **Users**: Administradores, Veterinarios, Personal.
-   **Clientes & Mascotas**: Información de los dueños y sus animales.
-   **Inventario**: Productos, Categorías, Proveedores, Movimientos de Stock.
-   **Médico**: Citas, Historiales, Vacunas.
-   **Financiero**: Ventas, Compras, Pagos.

## Seeders (Datos de Prueba)

El archivo `DatabaseSeeder.php` orquesta la carga de datos ficticios para pruebas.
Esto permite tener un sistema completamente funcional desde la instalación.

**Seeders Principales:**

-   `UsersSeeder`: Crea el admin y doctores.
-   `ProductosSeeder` / `ServiciosMedicosSeeder`: Catálogo base.
-   `ClientesSeeder` / `MascotasSeeder`: Pacientes de prueba.
-   `VentasSeeder` / `ComprasSeeder`: Historial transaccional.

# Instalación Básica

## Requisitos Previos

-   **PHP**: Versión 8.2 o superior.
-   **Composer**: Gestor de dependencias de PHP.
-   **MySQL / MariaDB**: Sistema de gestión de bases de datos.
-   **Node.js & NPM**: Para la gestión de paquetes del frontend.

## Pasos de Instalación

Sigue estos pasos para configurar el proyecto `System` en tu entorno local.

### 1. Clonar el repositorio

Si aún no tienes el código localmente:

```bash
git clone <URL_DEL_REPOSITORIO>
cd ZoofiPets/System
```

### 2. Instalar dependencias de Backend (Laravel)

Ejecuta Composer para instalar las librerías necesarias:

```bash
composer install
```

### 3. Configurar entorno

Duplica el archivo de configuración de ejemplo y renómbralo a `.env`:

```bash
cp .env.example .env
# En Windows (CMD): copy .env.example .env
```

Abre el archivo `.env` y configura el acceso a tu base de datos:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zoofipets  # Asegúrate de crear esta BD en tu gestor MySQL
DB_USERNAME=root       # Tu usuario MySQL
DB_PASSWORD=           # Tu contraseña MySQL
```

### 4. Generar clave de aplicación

```bash
php artisan key:generate
```

### 5. Migrar y poblar la Base de Datos

Esto creará las tablas e insertará los datos de prueba (usuarios, productos, etc.):

```bash
php artisan migrate --seed
```

### 6. Instalar dependencias de Frontend

Instala y compila los assets (CSS/JS):

```bash
npm install
npm run build
```

¡Listo! El sistema base está instalado.

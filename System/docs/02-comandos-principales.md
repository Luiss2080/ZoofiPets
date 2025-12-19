# Comandos Principales

Aquí tienes una lista de los comandos de Artisan y NPM más utilizados en el desarrollo del día a día.

## Servidor de Desarrollo

Iniciar el servidor local de Laravel:

```bash
php artisan serve
```

El sitio suele estar disponible en [http://localhost:8000](http://localhost:8000).

## Frontend (Vite)

Para desarrollo (con recarga automática / HMR):

```bash
npm run dev
```

Para compilar los archivos para producción (minificados):

```bash
npm run build
```

## Base de Datos

Ejecutar migraciones (crear tablas):

```bash
php artisan migrate
```

Reiniciar la base de datos desde cero y ejecutar seeders:

```bash
php artisan migrate:fresh --seed
```

Crear un nuevo modelo con migración y controlador:

```bash
php artisan make:model NombreModelo -mc
```

## Caché y Mantenimiento

Si haces cambios en el `.env` y no se reflejan:

```bash
php artisan config:clear
```

Si las vistas no se actualizan (raro en local, pero posible):

```bash
php artisan view:clear
```

Crear el enlace simbólico para archivos públicos (imágenes):

```bash
php artisan storage:link
```

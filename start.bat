@echo off
setlocal EnableDelayedExpansion
echo Starting ZoofiPets Environment...

:: Configuration
set WEB_HOST=127.0.0.10
set WEB_PORT=9000
set SYSTEM_HOST=127.0.0.20
set SYSTEM_PORT=9010

echo ---------------------------------------
echo Configuration:
echo Web (Login):    %WEB_HOST%:%WEB_PORT%
echo Sistema:        %SYSTEM_HOST%:%SYSTEM_PORT%
echo ---------------------------------------

:: Check if directories exist
if not exist "Web" (
    echo ERROR: Web directory not found!
    pause
    exit /b 1
)

if not exist "System" (
    echo ERROR: System directory not found!
    pause
    exit /b 1
)

:: Web (Login Portal - First)
echo.
echo ========================================
echo   🌐 Iniciando Web (Portal de Login)
echo ========================================
cd Web
echo   - Iniciando Laravel Server...
start /B php artisan serve --host=%WEB_HOST% --port=%WEB_PORT% > laravel.log 2>&1
echo   - Iniciando Vite...
start /B npm run dev > vite.log 2>&1
cd ..

:: System (Main Application - After Web)
echo.
echo ========================================
echo   📱 Iniciando Sistema (Aplicación)
echo ========================================
cd System
echo   - Iniciando Laravel Server...
start /B php artisan serve --host=%SYSTEM_HOST% --port=%SYSTEM_PORT% > laravel.log 2>&1
echo   - Iniciando Vite...
start /B npm run dev > vite.log 2>&1
cd ..

timeout /t 3 /nobreak >nul

echo.
echo =======================================
echo        🚀 ZoofiPets Iniciado! 🚀
echo =======================================
echo 🔐 Web (Login):  http://%WEB_HOST%:%WEB_PORT%
echo 📱 Sistema:      http://%SYSTEM_HOST%:%SYSTEM_PORT%
echo.
echo 📋 Flujo de acceso:
echo 1. Ingresar por Web para autenticarse
echo 2. Acceder al Sistema tras login exitoso
echo.
echo Los servicios se estan ejecutando en segundo plano en esta terminal.
echo Los logs se guardan en 'laravel.log' y 'vite.log' en cada carpeta.
echo.
echo Para detener todo, presiona CTRL + C en esta terminal.
echo =======================================

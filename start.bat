@echo off
setlocal EnableDelayedExpansion
echo Starting ZoofiPets Environment...

:: Find free port for Web (starting from 8000) - Web goes first as login portal
set WEB_PORT=8000
:findWebPort
netstat -an | find ":%WEB_PORT%" >nul
if %errorlevel% == 0 (
    set /a WEB_PORT+=1
    goto findWebPort
)

:: Find free port for System (starting from Web port + 1) - System comes after authentication
set /a SYSTEM_PORT=%WEB_PORT%+1
:findSystemPort
netstat -an | find ":%SYSTEM_PORT%" >nul
if %errorlevel% == 0 (
    set /a SYSTEM_PORT+=1
    goto findSystemPort
)

echo ---------------------------------------
echo Found free ports:
echo Web (Login):    %WEB_PORT%
echo Sistema:        %SYSTEM_PORT%
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
php artisan serve --port=%WEB_PORT% &
timeout /t 2 /nobreak >nul
powershell -Command "Start-Job -ScriptBlock { Set-Location '%CD%'; npm run dev } -Name 'Web-Frontend' | Out-Null"
cd ..

:: System (Main Application - After Web)
echo.
echo ========================================
echo   📱 Iniciando Sistema (Aplicación)
echo ========================================
cd System
php artisan serve --port=%SYSTEM_PORT% &
timeout /t 2 /nobreak >nul
powershell -Command "Start-Job -ScriptBlock { Set-Location '%CD%'; npm run dev } -Name 'Sistema-Frontend' | Out-Null"
cd ..

timeout /t 3 /nobreak >nul

echo.
echo =======================================
echo        🚀 ZoofiPets Iniciado! 🚀
echo =======================================
echo 🔐 Web (Login):  http://localhost:%WEB_PORT%
echo 📱 Sistema:      http://localhost:%SYSTEM_PORT%
echo.
echo 📋 Flujo de acceso:
echo 1. Ingresar por Web para autenticarse
echo 2. Acceder al Sistema tras login exitoso
echo.
echo Los frontends también están ejecutándose.
echo Revisa la salida de Laravel arriba para las URLs completas.
echo.
echo Para detener los frontends:
echo powershell "Get-Job | Stop-Job; Get-Job | Remove-Job"
echo =======================================

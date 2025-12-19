<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permiso;
use App\Models\Role;

class PermisosSeeder extends Seeder
{
    public function run()
    {
        // Definir permisos por módulo
        $permisos = [
            // Dashboard
            ['nombre' => 'Ver Dashboard', 'clave' => 'ver_dashboard', 'descripcion' => 'Puede ver el panel principal'],
            
            // Usuarios
            ['nombre' => 'Listar Usuarios', 'clave' => 'listar_usuarios', 'descripcion' => 'Puede ver la lista de usuarios'],
            ['nombre' => 'Crear Usuario', 'clave' => 'crear_usuario', 'descripcion' => 'Puede registrar nuevos usuarios'],
            ['nombre' => 'Editar Usuario', 'clave' => 'editar_usuario', 'descripcion' => 'Puede modificar usuarios existentes'],
            ['nombre' => 'Eliminar Usuario', 'clave' => 'eliminar_usuario', 'descripcion' => 'Puede eliminar usuarios'],
            
            // Roles y Permisos
            ['nombre' => 'Gestionar Roles', 'clave' => 'gestionar_roles', 'descripcion' => 'Puede crear y asignar roles'],
            ['nombre' => 'Listar Permisos', 'clave' => 'listar_permisos', 'descripcion' => 'Puede ver los permisos del sistema'],
            
            // Gestión Académica (Simulado para ZoofiPets como Gestión Veterinaria)
            ['nombre' => 'Gestionar Clientes', 'clave' => 'gestionar_clientes', 'descripcion' => 'CRUD de dueños de mascotas'],
            ['nombre' => 'Gestionar Mascotas', 'clave' => 'gestionar_mascotas', 'descripcion' => 'CRUD de pacientes'],
            
            // Citas
            ['nombre' => 'Agendar Citas', 'clave' => 'agendar_citas', 'descripcion' => 'Puede crear nuevas citas'],
            ['nombre' => 'Ver Calendario', 'clave' => 'ver_calendario', 'descripcion' => 'Puede ver la agenda'],
            ['nombre' => 'Cancelar Citas', 'clave' => 'cancelar_citas', 'descripcion' => 'Puede cancelar citas agendadas'],
            
            // Clínica
            ['nombre' => 'Crear Historial', 'clave' => 'crear_historial', 'descripcion' => 'Puede registrar consulta médica'],
            ['nombre' => 'Ver Historial', 'clave' => 'ver_historial', 'descripcion' => 'Puede ver antecedentes médicos'],
            ['nombre' => 'Aplicar Vacunas', 'clave' => 'aplicar_vacunas', 'descripcion' => 'Registro de vacunación'],
            
            // Inventario
            ['nombre' => 'Ver Inventario', 'clave' => 'ver_inventario', 'descripcion' => 'Ver stock de productos'],
            ['nombre' => 'Ajustar Stock', 'clave' => 'ajustar_stock', 'descripcion' => 'Entradas y salidas de almacén'],
            ['nombre' => 'Gestionar Productos', 'clave' => 'gestionar_productos', 'descripcion' => 'CRUD de catálogo'],
            
            // Ventas
            ['nombre' => 'Registrar Venta', 'clave' => 'registrar_venta', 'descripcion' => 'Punto de venta y facturación'],
            ['nombre' => 'Ver Reportes Ventas', 'clave' => 'ver_reportes_ventas', 'descripcion' => 'Métricas financieras'],
            
            // Configuración
            ['nombre' => 'Configurar Sistema', 'clave' => 'configurar_sistema', 'descripcion' => 'Ajustes generales'],
        ];

        foreach ($permisos as $p) {
            Permiso::create($p);
        }

        // Asignar permisos a roles
        $adminRole = Role::where('nombre', 'Administrador')->first();
        $vetRole = Role::where('nombre', 'Veterinario')->first();
        $recepRole = Role::where('nombre', 'Recepcionista')->first();

        // Admin: Todo
        $allPermisos = Permiso::all();
        $adminRole->permisos()->sync($allPermisos);

        // Veterinario: Clínica, Citas, Ver Inventario
        $vetPermisos = Permiso::whereIn('clave', [
            'ver_dashboard',
            'gestionar_mascotas', 
            'agendar_citas', 'ver_calendario', 
            'crear_historial', 'ver_historial', 'aplicar_vacunas',
            'ver_inventario'
        ])->get();
        $vetRole->permisos()->sync($vetPermisos);

        // Recepcionista: Citas, Clientes, Ventas
        $recepPermisos = Permiso::whereIn('clave', [
            'ver_dashboard',
            'gestionar_clientes', 'gestionar_mascotas',
            'agendar_citas', 'ver_calendario', 'cancelar_citas',
            'registrar_venta', 'ver_inventario'
        ])->get();
        $recepRole->permisos()->sync($recepPermisos);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorariosEmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('horarios_empleados')->insert([
            // Veterinarios - Horario completo
            ['empleado_id' => 1, 'dia_semana' => 'Lunes', 'hora_inicio' => '08:00', 'hora_fin' => '18:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'dia_semana' => 'Martes', 'hora_inicio' => '08:00', 'hora_fin' => '18:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'dia_semana' => 'Miercoles', 'hora_inicio' => '08:00', 'hora_fin' => '18:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'dia_semana' => 'Jueves', 'hora_inicio' => '08:00', 'hora_fin' => '18:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'dia_semana' => 'Viernes', 'hora_inicio' => '08:00', 'hora_fin' => '18:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'dia_semana' => 'Sabado', 'hora_inicio' => '08:00', 'hora_fin' => '14:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            ['empleado_id' => 2, 'dia_semana' => 'Lunes', 'hora_inicio' => '09:00', 'hora_fin' => '19:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'dia_semana' => 'Martes', 'hora_inicio' => '09:00', 'hora_fin' => '19:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'dia_semana' => 'Miercoles', 'hora_inicio' => '09:00', 'hora_fin' => '19:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'dia_semana' => 'Jueves', 'hora_inicio' => '09:00', 'hora_fin' => '19:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'dia_semana' => 'Viernes', 'hora_inicio' => '09:00', 'hora_fin' => '19:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'dia_semana' => 'Sabado', 'hora_inicio' => '09:00', 'hora_fin' => '15:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            ['empleado_id' => 3, 'dia_semana' => 'Martes', 'hora_inicio' => '10:00', 'hora_fin' => '20:00', 'descanso_inicio' => '14:00', 'descanso_fin' => '15:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'dia_semana' => 'Miercoles', 'hora_inicio' => '10:00', 'hora_fin' => '20:00', 'descanso_inicio' => '14:00', 'descanso_fin' => '15:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'dia_semana' => 'Jueves', 'hora_inicio' => '10:00', 'hora_fin' => '20:00', 'descanso_inicio' => '14:00', 'descanso_fin' => '15:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'dia_semana' => 'Viernes', 'hora_inicio' => '10:00', 'hora_fin' => '20:00', 'descanso_inicio' => '14:00', 'descanso_fin' => '15:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'dia_semana' => 'Sabado', 'hora_inicio' => '10:00', 'hora_fin' => '16:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'dia_semana' => 'Domingo', 'hora_inicio' => '09:00', 'hora_fin' => '13:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            // Recepcionistas
            ['empleado_id' => 9, 'dia_semana' => 'Lunes', 'hora_inicio' => '07:00', 'hora_fin' => '15:00', 'descanso_inicio' => '11:00', 'descanso_fin' => '11:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 9, 'dia_semana' => 'Martes', 'hora_inicio' => '07:00', 'hora_fin' => '15:00', 'descanso_inicio' => '11:00', 'descanso_fin' => '11:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 9, 'dia_semana' => 'Miercoles', 'hora_inicio' => '07:00', 'hora_fin' => '15:00', 'descanso_inicio' => '11:00', 'descanso_fin' => '11:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 9, 'dia_semana' => 'Jueves', 'hora_inicio' => '07:00', 'hora_fin' => '15:00', 'descanso_inicio' => '11:00', 'descanso_fin' => '11:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 9, 'dia_semana' => 'Viernes', 'hora_inicio' => '07:00', 'hora_fin' => '15:00', 'descanso_inicio' => '11:00', 'descanso_fin' => '11:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            ['empleado_id' => 10, 'dia_semana' => 'Lunes', 'hora_inicio' => '14:00', 'hora_fin' => '22:00', 'descanso_inicio' => '18:00', 'descanso_fin' => '18:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Martes', 'hora_inicio' => '14:00', 'hora_fin' => '22:00', 'descanso_inicio' => '18:00', 'descanso_fin' => '18:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Miercoles', 'hora_inicio' => '14:00', 'hora_fin' => '22:00', 'descanso_inicio' => '18:00', 'descanso_fin' => '18:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Jueves', 'hora_inicio' => '14:00', 'hora_fin' => '22:00', 'descanso_inicio' => '18:00', 'descanso_fin' => '18:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Viernes', 'hora_inicio' => '14:00', 'hora_fin' => '22:00', 'descanso_inicio' => '18:00', 'descanso_fin' => '18:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Sabado', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '12:30', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'dia_semana' => 'Domingo', 'hora_inicio' => '08:00', 'hora_fin' => '14:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            // Asistentes
            ['empleado_id' => 6, 'dia_semana' => 'Lunes', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'dia_semana' => 'Martes', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'dia_semana' => 'Miercoles', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'dia_semana' => 'Jueves', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'dia_semana' => 'Viernes', 'hora_inicio' => '08:00', 'hora_fin' => '16:00', 'descanso_inicio' => '12:00', 'descanso_fin' => '13:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'dia_semana' => 'Sabado', 'hora_inicio' => '08:00', 'hora_fin' => '12:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            
            // Cajeros
            ['empleado_id' => 11, 'dia_semana' => 'Lunes', 'hora_inicio' => '09:00', 'hora_fin' => '17:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'dia_semana' => 'Martes', 'hora_inicio' => '09:00', 'hora_fin' => '17:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'dia_semana' => 'Miercoles', 'hora_inicio' => '09:00', 'hora_fin' => '17:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'dia_semana' => 'Jueves', 'hora_inicio' => '09:00', 'hora_fin' => '17:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'dia_semana' => 'Viernes', 'hora_inicio' => '09:00', 'hora_fin' => '17:00', 'descanso_inicio' => '13:00', 'descanso_fin' => '14:00', 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'dia_semana' => 'Sabado', 'hora_inicio' => '09:00', 'hora_fin' => '13:00', 'descanso_inicio' => null, 'descanso_fin' => null, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

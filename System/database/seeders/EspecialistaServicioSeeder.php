<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialistaServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('especialista_servicio')->insert([
            // Dr. Ana María González - Medicina Interna (empleado_id: 1)
            ['empleado_id' => 1, 'servicio_medico_id' => 1, 'principal' => true, 'notas' => 'Especialista principal en consultas generales', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'servicio_medico_id' => 5, 'principal' => true, 'notas' => 'Especialista en medicina geriátrica', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'servicio_medico_id' => 16, 'principal' => false, 'notas' => 'Puede realizar desparasitaciones internas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'servicio_medico_id' => 17, 'principal' => false, 'notas' => 'Puede realizar desparasitaciones externas', 'created_at' => now(), 'updated_at' => now()],
            
            // Dr. Carlos Rodríguez - Cirugía (empleado_id: 2)
            ['empleado_id' => 2, 'servicio_medico_id' => 11, 'principal' => true, 'notas' => 'Especialista en esterilización felina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'servicio_medico_id' => 12, 'principal' => true, 'notas' => 'Especialista en castración canina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'servicio_medico_id' => 13, 'principal' => true, 'notas' => 'Especialista en cirugía de tumores', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'servicio_medico_id' => 14, 'principal' => true, 'notas' => 'Especialista en reparación de fracturas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'servicio_medico_id' => 4, 'principal' => false, 'notas' => 'Disponible para emergencias quirúrgicas', 'created_at' => now(), 'updated_at' => now()],
            
            // Dra. Lucía Martínez - Dermatología (empleado_id: 3)
            ['empleado_id' => 3, 'servicio_medico_id' => 3, 'principal' => true, 'notas' => 'Especialista principal en dermatología', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'servicio_medico_id' => 18, 'principal' => true, 'notas' => 'Especialista en tratamientos dermatológicos', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'servicio_medico_id' => 24, 'principal' => true, 'notas' => 'Especialista en baños medicinales', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'servicio_medico_id' => 17, 'principal' => false, 'notas' => 'Manejo de parásitos externos', 'created_at' => now(), 'updated_at' => now()],
            
            // Dr. Miguel Herrera - Cardiología (empleado_id: 4)
            ['empleado_id' => 4, 'servicio_medico_id' => 2, 'principal' => true, 'notas' => 'Especialista principal en cardiología', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 4, 'servicio_medico_id' => 20, 'principal' => true, 'notas' => 'Realiza radiografías para diagnóstico cardíaco', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 4, 'servicio_medico_id' => 21, 'principal' => true, 'notas' => 'Especialista en ecocardiografías', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 4, 'servicio_medico_id' => 22, 'principal' => false, 'notas' => 'Análisis sanguíneos para cardiología', 'created_at' => now(), 'updated_at' => now()],
            
            // Dra. Patricia Ramírez - Oftalmología (empleado_id: 5)
            ['empleado_id' => 5, 'servicio_medico_id' => 15, 'principal' => true, 'notas' => 'Especialista principal en cirugía ocular', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 5, 'servicio_medico_id' => 1, 'principal' => false, 'notas' => 'Consultas generales con enfoque oftalmológico', 'created_at' => now(), 'updated_at' => now()],
            
            // Empleados restantes (6-20)
            ['empleado_id' => 6, 'servicio_medico_id' => 25, 'principal' => true, 'notas' => 'Especialista en corte de uñas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 7, 'servicio_medico_id' => 27, 'principal' => true, 'notas' => 'Especialista en peluquería completa', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 8, 'servicio_medico_id' => 26, 'principal' => true, 'notas' => 'Especialista en limpieza dental', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 9, 'servicio_medico_id' => 8, 'principal' => true, 'notas' => 'Especialista en vacuna felina triple', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 10, 'servicio_medico_id' => 19, 'principal' => true, 'notas' => 'Especialista en hospitalización', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 11, 'servicio_medico_id' => 6, 'principal' => true, 'notas' => 'Especialista en vacuna múltiple canina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 12, 'servicio_medico_id' => 9, 'principal' => true, 'notas' => 'Especialista en vacuna bordetella', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 13, 'servicio_medico_id' => 22, 'principal' => true, 'notas' => 'Especialista en análisis sanguíneos', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 14, 'servicio_medico_id' => 20, 'principal' => false, 'notas' => 'Asistente en radiografías', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 15, 'servicio_medico_id' => 11, 'principal' => false, 'notas' => 'Asistente en esterilización felina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 16, 'servicio_medico_id' => 13, 'principal' => false, 'notas' => 'Asistente en cirugía de tumores', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 17, 'servicio_medico_id' => 15, 'principal' => false, 'notas' => 'Asistente en cirugía ocular', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 18, 'servicio_medico_id' => 24, 'principal' => false, 'notas' => 'Asistente en baños medicinales', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 19, 'servicio_medico_id' => 16, 'principal' => true, 'notas' => 'Especialista en desparasitación interna', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 20, 'servicio_medico_id' => 3, 'principal' => false, 'notas' => 'Asistente en dermatología', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

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
            
            // Dr. Juan Espinoza - Traumatología (empleado_id: 15)
            ['empleado_id' => 15, 'servicio_medico_id' => 14, 'principal' => true, 'notas' => 'Co-especialista en cirugía de fracturas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 15, 'servicio_medico_id' => 20, 'principal' => false, 'notas' => 'Interpretación de radiografías de trauma', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 15, 'servicio_medico_id' => 4, 'principal' => false, 'notas' => 'Atención de emergencias traumatológicas', 'created_at' => now(), 'updated_at' => now()],
            
            // Dra. Isabel Romero - Neurología (empleado_id: 16)
            ['empleado_id' => 16, 'servicio_medico_id' => 1, 'principal' => false, 'notas' => 'Consultas generales con enfoque neurológico', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 16, 'servicio_medico_id' => 4, 'principal' => false, 'notas' => 'Emergencias neurológicas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 16, 'servicio_medico_id' => 22, 'principal' => false, 'notas' => 'Análisis sanguíneos para neurología', 'created_at' => now(), 'updated_at' => now()],
            
            // Dr. Andrés Molina - Oncología (empleado_id: 20)
            ['empleado_id' => 20, 'servicio_medico_id' => 13, 'principal' => true, 'notas' => 'Co-especialista en cirugía de tumores', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 20, 'servicio_medico_id' => 21, 'principal' => false, 'notas' => 'Ecografías para detección de tumores', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 20, 'servicio_medico_id' => 22, 'principal' => false, 'notas' => 'Análisis oncológicos especializados', 'created_at' => now(), 'updated_at' => now()],
            
            // Dra. Cristina Aguilar - Anestesiología (empleado_id: 23)
            ['empleado_id' => 23, 'servicio_medico_id' => 11, 'principal' => false, 'notas' => 'Anestesia para esterilización felina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 23, 'servicio_medico_id' => 12, 'principal' => false, 'notas' => 'Anestesia para castración canina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 23, 'servicio_medico_id' => 13, 'principal' => false, 'notas' => 'Anestesia para cirugía de tumores', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 23, 'servicio_medico_id' => 14, 'principal' => false, 'notas' => 'Anestesia para cirugía de fracturas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 23, 'servicio_medico_id' => 15, 'principal' => false, 'notas' => 'Anestesia para cirugía ocular', 'created_at' => now(), 'updated_at' => now()],
            
            // Dr. Alberto Núñez - Medicina Felina (empleado_id: 25)
            ['empleado_id' => 25, 'servicio_medico_id' => 8, 'principal' => true, 'notas' => 'Especialista en vacuna felina triple', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 25, 'servicio_medico_id' => 10, 'principal' => true, 'notas' => 'Especialista en vacuna leucemia felina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 25, 'servicio_medico_id' => 11, 'principal' => false, 'notas' => 'Cirugía felina especializada', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 25, 'servicio_medico_id' => 1, 'principal' => false, 'notas' => 'Consultas especializadas en felinos', 'created_at' => now(), 'updated_at' => now()],
            
            // Vacunaciones - Múltiples veterinarios
            ['empleado_id' => 1, 'servicio_medico_id' => 6, 'principal' => false, 'notas' => 'Puede aplicar vacuna múltiple canina', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 1, 'servicio_medico_id' => 7, 'principal' => false, 'notas' => 'Puede aplicar vacuna antirrábica', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 2, 'servicio_medico_id' => 7, 'principal' => false, 'notas' => 'Puede aplicar vacuna antirrábica', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 3, 'servicio_medico_id' => 6, 'principal' => false, 'notas' => 'Puede aplicar vacuna múltiple canina', 'created_at' => now(), 'updated_at' => now()],
            
            // Estética - Asistentes especializados
            ['empleado_id' => 6, 'servicio_medico_id' => 25, 'principal' => true, 'notas' => 'Especialista en corte de uñas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 6, 'servicio_medico_id' => 27, 'principal' => true, 'notas' => 'Especialista en peluquería completa', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 7, 'servicio_medico_id' => 25, 'principal' => false, 'notas' => 'Puede realizar corte de uñas', 'created_at' => now(), 'updated_at' => now()],
            ['empleado_id' => 8, 'servicio_medico_id' => 27, 'principal' => false, 'notas' => 'Puede realizar peluquería básica', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

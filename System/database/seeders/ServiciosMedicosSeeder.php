<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosMedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('servicios_medicos')->insert([
            // Consultas
            ['nombre' => 'Consulta General', 'descripcion' => 'Consulta médica general para evaluación del estado de salud', 'precio' => 25.00, 'duracion_estimada_minutos' => 30, 'categoria' => 'Consulta', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Consulta Especializada - Cardiología', 'descripcion' => 'Consulta especializada en problemas cardíacos', 'precio' => 45.00, 'duracion_estimada_minutos' => 45, 'categoria' => 'Consulta', 'requisitos_previos' => 'Consulta general previa recomendada', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Consulta Especializada - Dermatología', 'descripcion' => 'Consulta especializada en problemas de piel', 'precio' => 40.00, 'duracion_estimada_minutos' => 40, 'categoria' => 'Consulta', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Consulta de Emergencia', 'descripcion' => 'Atención médica de emergencia 24/7', 'precio' => 80.00, 'duracion_estimada_minutos' => 60, 'categoria' => 'Emergencia', 'requisitos_previos' => null, 'requiere_cita' => false, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Consulta Geriátrica', 'descripcion' => 'Consulta especializada para animales de edad avanzada', 'precio' => 35.00, 'duracion_estimada_minutos' => 45, 'categoria' => 'Consulta', 'requisitos_previos' => 'Mascota mayor a 7 años', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            // Vacunaciones
            ['nombre' => 'Vacuna Múltiple Canina', 'descripcion' => 'Vacuna contra parvovirus, distemper, hepatitis, parainfluenza', 'precio' => 35.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Vacunacion', 'requisitos_previos' => 'Mascota debe estar desparasitada', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vacuna Antirrábica', 'descripcion' => 'Vacunación contra la rabia', 'precio' => 20.00, 'duracion_estimada_minutos' => 10, 'categoria' => 'Vacunacion', 'requisitos_previos' => 'Edad mínima 3 meses', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vacuna Felina Triple', 'descripcion' => 'Vacuna contra panleucopenia, rinotraqueitis y calicivirus', 'precio' => 30.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Vacunacion', 'requisitos_previos' => 'Gato debe estar desparasitado', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vacuna Tos de las Perreras', 'descripcion' => 'Vacunación contra bordetella bronchiseptica', 'precio' => 25.00, 'duracion_estimada_minutos' => 10, 'categoria' => 'Vacunacion', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Vacuna Leucemia Felina', 'descripcion' => 'Vacunación contra virus de leucemia felina', 'precio' => 35.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Vacunacion', 'requisitos_previos' => 'Prueba de leucemia negativa', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            // Cirugías
            ['nombre' => 'Esterilización Felina', 'descripcion' => 'Ovariohisterectomía en gatas', 'precio' => 120.00, 'duracion_estimada_minutos' => 90, 'categoria' => 'Cirugia', 'requisitos_previos' => 'Ayuno de 12 horas, exámenes pre-quirúrgicos', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Castración Canina', 'descripcion' => 'Orquiectomía en perros machos', 'precio' => 100.00, 'duracion_estimada_minutos' => 60, 'categoria' => 'Cirugia', 'requisitos_previos' => 'Ayuno de 12 horas, exámenes pre-quirúrgicos', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cirugía de Tumores', 'descripcion' => 'Remoción quirúrgica de tumores benignos o malignos', 'precio' => 250.00, 'duracion_estimada_minutos' => 120, 'categoria' => 'Cirugia', 'requisitos_previos' => 'Biopsia previa, exámenes completos', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cirugía de Fractura', 'descripcion' => 'Reparación quirúrgica de fracturas óseas', 'precio' => 300.00, 'duracion_estimada_minutos' => 150, 'categoria' => 'Cirugia', 'requisitos_previos' => 'Radiografías previas, estabilización', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cirugía Ocular', 'descripcion' => 'Cirugías especializadas del ojo', 'precio' => 200.00, 'duracion_estimada_minutos' => 90, 'categoria' => 'Cirugia', 'requisitos_previos' => 'Evaluación oftalmológica previa', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            // Tratamientos
            ['nombre' => 'Desparasitación Interna', 'descripcion' => 'Tratamiento antiparasitario interno', 'precio' => 15.00, 'duracion_estimada_minutos' => 10, 'categoria' => 'Tratamiento', 'requisitos_previos' => null, 'requiere_cita' => false, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Desparasitación Externa', 'descripcion' => 'Tratamiento contra pulgas, garrapatas y ácaros', 'precio' => 18.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Tratamiento', 'requisitos_previos' => null, 'requiere_cita' => false, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Tratamiento Dermatológico', 'descripcion' => 'Tratamiento para problemas de piel y pelaje', 'precio' => 40.00, 'duracion_estimada_minutos' => 30, 'categoria' => 'Tratamiento', 'requisitos_previos' => 'Diagnóstico previo necesario', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Terapia de Fluidos', 'descripcion' => 'Administración de sueros y medicamentos intravenosos', 'precio' => 50.00, 'duracion_estimada_minutos' => 120, 'categoria' => 'Tratamiento', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            // Diagnósticos
            ['nombre' => 'Radiografía Simple', 'descripcion' => 'Estudio radiográfico básico', 'precio' => 50.00, 'duracion_estimada_minutos' => 20, 'categoria' => 'Diagnostico', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ecografía Abdominal', 'descripcion' => 'Ecografía de órganos abdominales', 'precio' => 60.00, 'duracion_estimada_minutos' => 30, 'categoria' => 'Diagnostico', 'requisitos_previos' => 'Ayuno de 8-12 horas', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Análisis de Sangre Completo', 'descripcion' => 'Hemograma y química sanguínea completa', 'precio' => 70.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Diagnostico', 'requisitos_previos' => 'Ayuno de 12 horas', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Examen Coprológico', 'descripcion' => 'Análisis de heces para detectar parásitos', 'precio' => 20.00, 'duracion_estimada_minutos' => 5, 'categoria' => 'Diagnostico', 'requisitos_previos' => 'Muestra fresca de heces', 'requiere_cita' => false, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            // Estética
            ['nombre' => 'Baño Medicinal', 'descripcion' => 'Baño con productos especiales para problemas dermatológicos', 'precio' => 25.00, 'duracion_estimada_minutos' => 45, 'categoria' => 'Estetica', 'requisitos_previos' => null, 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Corte de Uñas', 'descripcion' => 'Corte profesional de uñas', 'precio' => 10.00, 'duracion_estimada_minutos' => 15, 'categoria' => 'Estetica', 'requisitos_previos' => null, 'requiere_cita' => false, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Limpieza Dental', 'descripcion' => 'Limpieza y profilaxis dental', 'precio' => 80.00, 'duracion_estimada_minutos' => 60, 'categoria' => 'Estetica', 'requisitos_previos' => 'Evaluación dental previa', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Peluquería Completa', 'descripcion' => 'Baño, corte, secado y arreglo completo', 'precio' => 35.00, 'duracion_estimada_minutos' => 90, 'categoria' => 'Estetica', 'requisitos_previos' => 'Vacunas al día', 'requiere_cita' => true, 'activo' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

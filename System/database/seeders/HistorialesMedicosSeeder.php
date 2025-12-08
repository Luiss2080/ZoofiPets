<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialesMedicosSeeder extends Seeder
{
    public function run()
    {
        $historiales = [
            [
                'mascota_id' => 1,
                'fecha_consulta' => '2024-01-15',
                'motivo_consulta' => 'Revisión general y vacunación',
                'diagnostico' => 'Animal sano',
                'tratamiento' => 'Aplicación de vacuna antirrábica',
                'peso' => 25.5,
                'temperatura' => 38.2,
                'veterinario_id' => 1,
                'observaciones' => 'Mascota en excelente estado'
            ],
            [
                'mascota_id' => 2,
                'fecha_consulta' => '2024-01-16',
                'motivo_consulta' => 'Problemas digestivos',
                'diagnostico' => 'Gastritis leve',
                'tratamiento' => 'Dieta blanda por 3 días',
                'peso' => 8.2,
                'temperatura' => 38.8,
                'veterinario_id' => 2,
                'observaciones' => 'Mejoría progresiva'
            ],
            [
                'mascota_id' => 3,
                'fecha_consulta' => '2024-01-17',
                'motivo_consulta' => 'Tos persistente',
                'diagnostico' => 'Irritación respiratoria',
                'tratamiento' => 'Antibiótico por 5 días',
                'peso' => 15.8,
                'temperatura' => 39.1,
                'veterinario_id' => 1,
                'observaciones' => 'Control en una semana'
            ],
            [
                'mascota_id' => 4,
                'fecha_consulta' => '2024-01-18',
                'motivo_consulta' => 'Cojera en pata trasera',
                'diagnostico' => 'Esguince leve',
                'tratamiento' => 'Reposo y antiinflamatorio',
                'peso' => 30.2,
                'temperatura' => 38.5,
                'veterinario_id' => 2,
                'observaciones' => 'Evitar ejercicio intenso'
            ],
            [
                'mascota_id' => 5,
                'fecha_consulta' => '2024-01-19',
                'motivo_consulta' => 'Revisión dermatológica',
                'diagnostico' => 'Dermatitis alérgica',
                'tratamiento' => 'Champú medicado y corticoides',
                'peso' => 4.5,
                'temperatura' => 38.3,
                'veterinario_id' => 3,
                'observaciones' => 'Mejoría notable en 2 semanas'
            ],
            [
                'mascota_id' => 6,
                'fecha_consulta' => '2024-01-20',
                'motivo_consulta' => 'Pérdida de apetito',
                'diagnostico' => 'Estrés por cambio de ambiente',
                'tratamiento' => 'Estimulante del apetito',
                'peso' => 5.8,
                'temperatura' => 38.0,
                'veterinario_id' => 3,
                'observaciones' => 'Adaptación gradual'
            ],
            [
                'mascota_id' => 7,
                'fecha_consulta' => '2024-01-21',
                'motivo_consulta' => 'Control post-cirugía',
                'diagnostico' => 'Recuperación satisfactoria',
                'tratamiento' => 'Curación diaria de herida',
                'peso' => 18.3,
                'temperatura' => 38.4,
                'veterinario_id' => 1,
                'observaciones' => 'Cicatrización correcta'
            ],
            [
                'mascota_id' => 8,
                'fecha_consulta' => '2024-01-22',
                'motivo_consulta' => 'Vómitos frecuentes',
                'diagnostico' => 'Intoxicación alimentaria leve',
                'tratamiento' => 'Suero y protector gástrico',
                'peso' => 22.7,
                'temperatura' => 39.2,
                'veterinario_id' => 2,
                'observaciones' => 'Vigilar hidratación'
            ],
            [
                'mascota_id' => 9,
                'fecha_consulta' => '2024-01-23',
                'motivo_consulta' => 'Revisión geriátrica',
                'diagnostico' => 'Artrosis inicial',
                'tratamiento' => 'Condroprotector y ejercicio moderado',
                'peso' => 6.2,
                'temperatura' => 37.9,
                'veterinario_id' => 3,
                'observaciones' => 'Control mensual'
            ],
            [
                'mascota_id' => 10,
                'fecha_consulta' => '2024-01-24',
                'motivo_consulta' => 'Herida en almohadilla',
                'diagnostico' => 'Corte superficial',
                'tratamiento' => 'Desinfección y vendaje',
                'peso' => 12.4,
                'temperatura' => 38.6,
                'veterinario_id' => 1,
                'observaciones' => 'Evitar humedad'
            ],
            [
                'mascota_id' => 11,
                'fecha_consulta' => '2024-01-25',
                'motivo_consulta' => 'Comportamiento agresivo',
                'diagnostico' => 'Estrés territorial',
                'tratamiento' => 'Terapia conductual',
                'peso' => 4.8,
                'temperatura' => 38.1,
                'veterinario_id' => 3,
                'observaciones' => 'Separar de otros gatos'
            ],
            [
                'mascota_id' => 12,
                'fecha_consulta' => '2024-01-26',
                'motivo_consulta' => 'Diarrea crónica',
                'diagnostico' => 'Sensibilidad alimentaria',
                'tratamiento' => 'Dieta hipoalergénica',
                'peso' => 28.9,
                'temperatura' => 38.7,
                'veterinario_id' => 2,
                'observaciones' => 'Cambio gradual de alimento'
            ],
            [
                'mascota_id' => 13,
                'fecha_consulta' => '2024-01-27',
                'motivo_consulta' => 'Otitis externa',
                'diagnostico' => 'Infección bacteriana del oído',
                'tratamiento' => 'Gotas antibióticas por 7 días',
                'peso' => 7.1,
                'temperatura' => 38.9,
                'veterinario_id' => 3,
                'observaciones' => 'Limpiar oídos diariamente'
            ],
            [
                'mascota_id' => 14,
                'fecha_consulta' => '2024-01-28',
                'motivo_consulta' => 'Convulsiones',
                'diagnostico' => 'Epilepsia idiopática',
                'tratamiento' => 'Anticonvulsivante diario',
                'peso' => 35.6,
                'temperatura' => 38.3,
                'veterinario_id' => 1,
                'observaciones' => 'Monitoreo constante'
            ],
            [
                'mascota_id' => 15,
                'fecha_consulta' => '2024-01-29',
                'motivo_consulta' => 'Ceguera súbita',
                'diagnostico' => 'Cataratas seniles',
                'tratamiento' => 'Evaluación oftalmológica',
                'peso' => 3.9,
                'temperatura' => 37.8,
                'veterinario_id' => 3,
                'observaciones' => 'Adaptar ambiente'
            ],
            [
                'mascota_id' => 16,
                'fecha_consulta' => '2024-01-30',
                'motivo_consulta' => 'Fractura en pata',
                'diagnostico' => 'Fractura cerrada de radio',
                'tratamiento' => 'Inmovilización con yeso',
                'peso' => 19.8,
                'temperatura' => 38.8,
                'veterinario_id' => 2,
                'observaciones' => 'Reposo absoluto 6 semanas'
            ],
            [
                'mascota_id' => 17,
                'fecha_consulta' => '2024-01-31',
                'motivo_consulta' => 'Problemas urinarios',
                'diagnostico' => 'Cistitis bacteriana',
                'tratamiento' => 'Antibiótico y abundante agua',
                'peso' => 5.3,
                'temperatura' => 39.0,
                'veterinario_id' => 3,
                'observaciones' => 'Análisis de orina en 1 semana'
            ],
            [
                'mascota_id' => 18,
                'fecha_consulta' => '2024-02-01',
                'motivo_consulta' => 'Revisión dental',
                'diagnostico' => 'Sarro dental moderado',
                'tratamiento' => 'Limpieza dental bajo anestesia',
                'peso' => 26.4,
                'temperatura' => 38.1,
                'veterinario_id' => 1,
                'observaciones' => 'Higiene dental diaria'
            ],
            [
                'mascota_id' => 19,
                'fecha_consulta' => '2024-02-02',
                'motivo_consulta' => 'Alopecia circular',
                'diagnostico' => 'Dermatofitosis (hongos)',
                'tratamiento' => 'Antifúngico tópico y oral',
                'peso' => 3.2,
                'temperatura' => 38.4,
                'veterinario_id' => 3,
                'observaciones' => 'Aislamiento temporal'
            ],
            [
                'mascota_id' => 20,
                'fecha_consulta' => '2024-02-03',
                'motivo_consulta' => 'Control geriátrico',
                'diagnostico' => 'Insuficiencia renal crónica inicial',
                'tratamiento' => 'Dieta renal y suplementos',
                'peso' => 31.2,
                'temperatura' => 37.9,
                'veterinario_id' => 2,
                'observaciones' => 'Análisis sanguíneos mensuales'
            ],
            [
                'mascota_id' => 1,
                'fecha_consulta' => '2024-02-04',
                'motivo_consulta' => 'Control post-vacunación',
                'diagnostico' => 'Sin reacciones adversas',
                'tratamiento' => 'Observación domiciliaria',
                'peso' => 25.8,
                'temperatura' => 38.0,
                'veterinario_id' => 1,
                'observaciones' => 'Próxima vacuna en 6 meses'
            ],
            [
                'mascota_id' => 2,
                'fecha_consulta' => '2024-02-05',
                'motivo_consulta' => 'Seguimiento gastritis',
                'diagnostivo' => 'Mejoría completa',
                'tratamiento' => 'Reintroducción gradual alimento normal',
                'peso' => 8.5,
                'temperatura' => 38.2,
                'veterinario_id' => 2,
                'observaciones' => 'Alta médica'
            ],
            [
                'mascota_id' => 3,
                'fecha_consulta' => '2024-02-06',
                'motivo_consulta' => 'Control respiratorio',
                'diagnostico' => 'Recuperación total',
                'tratamiento' => 'Fin de tratamiento antibiótico',
                'peso' => 16.1,
                'temperatura' => 38.3,
                'veterinario_id' => 1,
                'observaciones' => 'Tos completamente resuelta'
            ],
            [
                'mascota_id' => 4,
                'fecha_consulta' => '2024-02-07',
                'motivo_consulta' => 'Evaluación movilidad',
                'diagnostico' => 'Recuperación satisfactoria',
                'tratamiento' => 'Fisioterapia suave',
                'peso' => 30.0,
                'temperatura' => 38.4,
                'veterinario_id' => 2,
                'observaciones' => 'Retomar actividad gradualmente'
            ],
            [
                'mascota_id' => 5,
                'fecha_consulta' => '2024-02-08',
                'motivo_consulta' => 'Control dermatológico',
                'diagnostico' => 'Remisión completa de dermatitis',
                'tratamiento' => 'Mantenimiento con champú suave',
                'peso' => 4.7,
                'temperatura' => 38.1,
                'veterinario_id' => 3,
                'observaciones' => 'Evitar alérgenos conocidos'
            ]
        ];

        DB::table('historiales_medicos')->insert($historiales);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistorialesMedicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $historiales = [
            ['mascota_id' => 1, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subMonths(3), 'motivo_consulta' => 'Control rutinario', 'diagnostico' => 'Mascota en perfecto estado de salud. Sin problemas detectados.', 'tratamiento' => 'Mantener dieta balanceada y ejercicio regular', 'peso' => '28.5', 'temperatura' => '38.2', 'observaciones' => 'Excelente estado físico'],
            ['mascota_id' => 2, 'empleado_id' => 2, 'fecha_consulta' => Carbon::now()->subMonths(2), 'motivo_consulta' => 'Diarrea y vómitos', 'diagnostico' => 'Gastroenteritis aguda. Posible intolerancia alimentaria.', 'tratamiento' => 'Ayuno 12h, luego dieta blanda. Omeprazol 20mg cada 12h por 5 días', 'peso' => '18.2', 'temperatura' => '39.1', 'observaciones' => 'Responde bien al tratamiento'],
            ['mascota_id' => 3, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subMonths(1), 'motivo_consulta' => 'Cojera pata trasera', 'diagnostico' => 'Luxación de rótula grado II. Recomendación quirúrgica', 'tratamiento' => 'Meloxicam 0.1mg/kg cada 24h. Reposo relativo. Control en 2 semanas', 'peso' => '6.8', 'temperatura' => '38.6', 'observaciones' => 'Programar cirugía'],
            ['mascota_id' => 4, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subWeeks(1), 'motivo_consulta' => 'Revisión post-cirugía', 'diagnostico' => 'Evolución favorable post-esterilización. Herida cicatrizando correctamente', 'tratamiento' => 'Continuar antibióticos por 3 días más. Retirar puntos en 5 días', 'peso' => '22.1', 'temperatura' => '38.4', 'observaciones' => 'Sin complicaciones'],
            ['mascota_id' => 5, 'empleado_id' => 4, 'fecha_consulta' => Carbon::now()->subMonths(4), 'motivo_consulta' => 'Problema dermatológico', 'diagnostico' => 'Dermatitis atópica. Alergia alimentaria probable', 'tratamiento' => 'Dieta hipoalergénica, shampoo medicado 2 veces por semana', 'peso' => '31.7', 'temperatura' => '38.8', 'observaciones' => 'Requiere seguimiento cada 15 días'],
            ['mascota_id' => 6, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subDays(3), 'motivo_consulta' => 'Vacunación y desparasitación', 'diagnostico' => 'Cachorro sano, listo para segunda dosis de vacuna', 'tratamiento' => 'Aplicada vacuna quintuple, desparasitante oral', 'peso' => '3.2', 'temperatura' => '38.5', 'observaciones' => 'Próxima vacuna en 21 días'],
            ['mascota_id' => 7, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subDays(1), 'motivo_consulta' => 'Control cachorro', 'diagnostico' => 'Cachorro en desarrollo normal para su edad', 'tratamiento' => 'Primera vacuna aplicada. Dieta para cachorros', 'peso' => '1.8', 'temperatura' => '38.3', 'observaciones' => 'Socialización temprana recomendada'],
            ['mascota_id' => 8, 'empleado_id' => 2, 'fecha_consulta' => Carbon::now()->subMonths(5), 'motivo_consulta' => 'Chequeo geriátrico', 'diagnostico' => 'Artrosis leve en caderas. Función renal normal', 'tratamiento' => 'Glucosamina 500mg/día, ejercicio moderado', 'peso' => '41.3', 'temperatura' => '38.1', 'observaciones' => 'Control cada 6 meses'],
            ['mascota_id' => 9, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subMonths(6), 'motivo_consulta' => 'Problema respiratorio', 'diagnostico' => 'Asma felino. Crisis alérgica estacional', 'tratamiento' => 'Prednisolona 2.5mg cada 12h por 7 días, luego cada 24h por 7 días más', 'peso' => '4.2', 'temperatura' => '38.9', 'observaciones' => 'Evitar alérgenos ambientales'],
            ['mascota_id' => 10, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subWeeks(2), 'motivo_consulta' => 'No come hace 2 días', 'diagnostico' => 'Lipidosis hepática leve. Estrés por cambio de ambiente', 'tratamiento' => 'Alimentación forzada, hepatoprotector, reducir estrés', 'peso' => '3.9', 'temperatura' => '38.7', 'observaciones' => 'Monitoreo diario peso'],
            ['mascota_id' => 11, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subDays(10), 'motivo_consulta' => 'Vómitos frecuentes', 'diagnostico' => 'Gastritis crónica. Probable bolas de pelo', 'tratamiento' => 'Dieta gastroentérica, malta para eliminar pelo, probióticos', 'peso' => '5.1', 'temperatura' => '38.6', 'observaciones' => 'Cepillado diario'],
            ['mascota_id' => 12, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subMonths(1), 'motivo_consulta' => 'Castración programada', 'diagnostico' => 'Procedimiento quirúrgico exitoso. Sin complicaciones', 'tratamiento' => 'Antibióticos por 7 días, analgésicos por 3 días', 'peso' => '4.7', 'temperatura' => '38.5', 'observaciones' => 'Alta médica en 7 días'],
            ['mascota_id' => 13, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subMonths(2), 'motivo_consulta' => 'Pérdida de peso', 'diagnostico' => 'Hipertiroidismo. Requiere tratamiento crónico', 'tratamiento' => 'Metimazol 2.5mg cada 12h, control T4 en 1 mes', 'peso' => '3.1', 'temperatura' => '39.2', 'observaciones' => 'Monitoreo función tiroidea'],
            ['mascota_id' => 14, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subDays(5), 'motivo_consulta' => 'Control post-parto', 'diagnostico' => 'Recuperación normal post-parto. Lactancia adecuada', 'tratamiento' => 'Suplemento vitamínico, aumentar ración alimenticia', 'peso' => '3.8', 'temperatura' => '38.4', 'observaciones' => 'Vigilar desarrollo gatitos'],
            ['mascota_id' => 15, 'empleado_id' => 15, 'fecha_consulta' => Carbon::now()->subMonths(7), 'motivo_consulta' => 'Problema urinario', 'diagnostico' => 'Cistitis bacterial. Urocultivo positivo E. coli', 'tratamiento' => 'Enrofloxacina 50mg cada 12h por 10 días', 'peso' => '5.2', 'temperatura' => '38.8', 'observaciones' => 'Control urocultivo post-tratamiento'],
            ['mascota_id' => 16, 'empleado_id' => 15, 'fecha_consulta' => Carbon::now()->subMonths(3), 'motivo_consulta' => 'Herida por pelea', 'diagnostico' => 'Laceración profunda región cervical. Sutura necesaria', 'tratamiento' => 'Sutura, antibióticos, analgésicos, collar isabelino', 'peso' => '32.1', 'temperatura' => '38.6', 'observaciones' => 'Evitar actividad física'],
            ['mascota_id' => 17, 'empleado_id' => 15, 'fecha_consulta' => Carbon::now()->subWeeks(3), 'motivo_consulta' => 'Examen pre-anestésico', 'diagnostico' => 'Apto para procedimiento anestésico. Valores normales', 'tratamiento' => 'Ayuno 12h previo, medicación preanestésica', 'peso' => '45.8', 'temperatura' => '38.3', 'observaciones' => 'Programar limpieza dental'],
            ['mascota_id' => 18, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subDays(1), 'motivo_consulta' => 'Urgencia por convulsiones', 'diagnostico' => 'Epilepsia idiopática. Primera crisis convulsiva', 'tratamiento' => 'Fenobarbital inicio 2mg/kg cada 12h, control neurológico', 'peso' => '7.3', 'temperatura' => '39.1', 'observaciones' => 'Referir a neurólogo'],
            ['mascota_id' => 19, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subHours(2), 'motivo_consulta' => 'Primera consulta', 'diagnostico' => 'Cachorro sano, primera evaluación', 'tratamiento' => 'Plan vacunal, desparasitación, educación propietario', 'peso' => '0.8', 'temperatura' => '38.2', 'observaciones' => 'Próxima cita en 15 días'],
            ['mascota_id' => 20, 'empleado_id' => 15, 'fecha_consulta' => Carbon::now()->subMonths(8), 'motivo_consulta' => 'Displasia de cadera', 'diagnostico' => 'Displasia bilateral grado B. Manejo conservador', 'tratamiento' => 'Control peso, fisioterapia, condroprotectores', 'peso' => '38.4', 'temperatura' => '38.1', 'observaciones' => 'Radiografías control 6 meses'],
            ['mascota_id' => 21, 'empleado_id' => 3, 'fecha_consulta' => Carbon::now()->subDays(20), 'motivo_consulta' => 'Lesiones en piel', 'diagnostico' => 'Dermatitis solar. Piel sensible por ausencia de pelo', 'tratamiento' => 'Protector solar, evitar exposición directa', 'peso' => '3.6', 'temperatura' => '38.9', 'observaciones' => 'Cuidados especiales raza'],
            ['mascota_id' => 22, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subDays(30), 'motivo_consulta' => 'Evaluación comportamiento', 'diagnostico' => 'Ansiedad por separación leve', 'tratamiento' => 'Modificación conductual, enriquecimiento ambiental', 'peso' => '12.8', 'temperatura' => '38.3', 'observaciones' => 'Considerar ansiolítico si no mejora'],
            ['mascota_id' => 23, 'empleado_id' => 25, 'fecha_consulta' => Carbon::now()->subDays(15), 'motivo_consulta' => 'Control rutinario raza', 'diagnostico' => 'Examen normal. Predisposición renal en raza', 'tratamiento' => 'Dieta específica, control función renal anual', 'peso' => '4.3', 'temperatura' => '38.7', 'observaciones' => 'Seguimiento especializado raza'],
            ['mascota_id' => 24, 'empleado_id' => 1, 'fecha_consulta' => Carbon::now()->subMonths(1), 'motivo_consulta' => 'Otitis externa', 'diagnostico' => 'Otitis bacteriana bilateral. Cultivo pendiente', 'tratamiento' => 'Limpieza ótica, gentamicina tópica cada 8h', 'peso' => '27.9', 'temperatura' => '38.7', 'observaciones' => 'Control semanal hasta resolución']
        ];

        foreach ($historiales as $historial) {
            DB::table('historiales_medicos')->insert([
                'mascota_id' => $historial['mascota_id'],
                'empleado_id' => $historial['empleado_id'],
                'fecha_consulta' => $historial['fecha_consulta'],
                'peso' => $historial['peso'],
                'temperatura' => $historial['temperatura'],
                'sintomas' => $historial['sintomas'],
                'diagnostico' => $historial['diagnostico'],
                'tratamiento' => $historial['tratamiento'],
                'observaciones' => $historial['observaciones'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

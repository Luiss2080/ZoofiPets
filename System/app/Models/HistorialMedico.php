<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedico extends Model
{
    use HasFactory;
    protected $table = 'historiales_medicos';
    
    protected $fillable = [
        'mascota_id', 'empleado_id', 'cita_medica_id', 'fecha_consulta',
        'peso', 'temperatura', 'sintomas', 'diagnostico', 'tratamiento',
        'medicamentos', 'examenes_realizados', 'recomendaciones',
        'proxima_cita', 'observaciones'
    ];

    protected $casts = [
        'fecha_consulta' => 'datetime',
        'proxima_cita' => 'date',
    ];

    public function mascota() {
        return $this->belongsTo(Mascota::class);
    }

    public function veterinario() {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function cita() {
        return $this->belongsTo(CitaMedica::class, 'cita_medica_id');
    }
}

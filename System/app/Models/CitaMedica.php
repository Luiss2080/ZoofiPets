<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CitaMedica extends Model
{
    use HasFactory;

    protected $table = 'citas_medicas';

    protected $fillable = [
        'numero_cita', 'cliente_id', 'mascota_id', 'empleado_id', 'servicio_medico_id',
        'fecha_hora', 'duracion_minutos', 'estado', 'prioridad',
        'motivo_consulta', 'sintomas_observados', 'precio_estimado', 
        'precio_final', 'observaciones', 'recomendaciones', 
        'fecha_reprogramacion', 'motivo_cancelacion'
    ];

    protected $casts = [
        'fecha_hora' => 'datetime',
        'fecha_reprogramacion' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }

    public function veterinario()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function servicio()
    {
        return $this->belongsTo(ServicioMedico::class, 'servicio_medico_id');
    }
}

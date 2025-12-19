<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroVacuna extends Model
{
    protected $table = 'registro_vacunas';

    protected $fillable = [
        'mascota_id', 'empleado_id', 'servicio_medico_id',
        'vacuna', 'laboratorio', 'lote', 'fecha_aplicacion',
        'proxima_dosis', 'observaciones', 'reaccion_adversa',
        'descripcion_reaccion'
    ];

    protected $casts = [
        'fecha_aplicacion' => 'date',
        'proxima_dosis' => 'date',
    ];

    public function mascota() {
        return $this->belongsTo(Mascota::class);
    }

    public function veterinario() {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function servicio() {
        return $this->belongsTo(ServicioMedico::class, 'servicio_medico_id');
    }
}

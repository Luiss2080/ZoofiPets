<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use HasFactory;

    protected $table = 'laboratorios';

    protected $guarded = ['id'];

    protected $casts = [
        'fecha_solicitud' => 'date',
        'fecha_resultado' => 'date',
        'laboratorio_externo' => 'boolean',
        'costo' => 'decimal:2',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }

    public function historialMedico()
    {
        return $this->belongsTo(HistorialMedico::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}

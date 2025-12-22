<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'empleado_id',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
        'activo'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}

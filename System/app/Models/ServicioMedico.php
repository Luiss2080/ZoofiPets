<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicioMedico extends Model
{
    use HasFactory;

    protected $table = 'servicios_medicos';

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'duracion_estimada_minutos',
        'categoria', 'requisitos_previos', 'requiere_cita', 'activo'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicioMedico extends Model
{
    protected $table = 'servicios_medicos';

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'duracion_estimada_minutos',
        'categoria', 'requisitos_previos', 'requiere_cita', 'activo'
    ];
}

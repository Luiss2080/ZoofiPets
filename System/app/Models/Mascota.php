<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = [
        'cliente_id', 'codigo_mascota', 'nombre', 'especie', 'raza',
        'edad_años', 'edad_meses', 'peso', 'sexo', 'fecha_nacimiento',
        'color', 'caracteristicas_especiales', 'esterilizado', 
        'fecha_esterilizacion', 'microchip', 'alergias', 
        'condiciones_medicas', 'seguro_veterinario', 'numero_poliza',
        'temperamento', 'notas_comportamiento', 'activo'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function citas_medicas()
    {
        return $this->hasMany(CitaMedica::class);
    }
    
    public function historiales_medicos()
    {
        return $this->hasMany(HistorialMedico::class);
    }
}

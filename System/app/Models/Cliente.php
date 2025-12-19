<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cedula', 'nombre', 'apellido', 'telefono', 'telefono_secundario', 
        'email', 'direccion', 'fecha_nacimiento', 'genero', 
        'contacto_emergencia', 'telefono_emergencia', 'notas',
        'acepta_promociones', 'credito_disponible', 'activo'
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }

    public function citas_medicas()
    {
        return $this->hasMany(CitaMedica::class);
    }
}

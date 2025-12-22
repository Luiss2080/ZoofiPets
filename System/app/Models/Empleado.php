<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_empleado', 'nombre', 'apellido', 'cedula', 'telefono',
        'telefono_emergencia', 'email', 'direccion', 'cargo_id',
        'especialidad', 'salario', 'fecha_ingreso', 'fecha_nacimiento',
        'genero', 'numero_colegiado', 'tipo_contrato', 'notas', 'activo'
    ];

    /**
     * Get the cargo associated with the employee.
     */
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}

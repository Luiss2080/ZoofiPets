<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesionCaja extends Model
{
    use HasFactory;

    protected $table = 'sesiones_caja';
    protected $guarded = ['id'];
    protected $casts = [
        'fecha_apertura' => 'datetime',
        'fecha_cierre' => 'datetime',
        'monto_inicial' => 'decimal:2',
        'monto_final' => 'decimal:2',
        'diferencia' => 'decimal:2',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'sesion_caja_id');
    }
}

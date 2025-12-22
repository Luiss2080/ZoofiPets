<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Add this line

class Devolucion extends Model
{
    use HasFactory; // Add this line

    protected $table = 'devoluciones'; // Add this line
    protected $guarded = ['id']; // Add this line
    protected $casts = [
        'fecha_devolucion' => 'datetime',
        'monto_reembolsado' => 'decimal:2',
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function autorizadoPor()
    {
        return $this->belongsTo(Empleado::class, 'autorizado_por'); // Add this line (fix syntax)
    }

    public function detalles()
    {
        return $this->hasMany(DetalleDevolucion::class);
    }
}

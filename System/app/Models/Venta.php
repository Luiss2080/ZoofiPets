<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'numero_factura', 'cliente_id', 'empleado_id', 'fecha_venta',
        'subtotal', 'impuesto', 'descuento', 'total', 'estado',
        'metodo_pago', 'observaciones'
    ];

    protected $casts = [
        'fecha_venta' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}

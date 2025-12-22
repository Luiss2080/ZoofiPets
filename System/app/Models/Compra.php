<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $fillable = [
        'numero_factura',
        'proveedor_id',
        'empleado_id',
        'fecha_compra',
        'fecha_recepcion',
        'subtotal',
        'impuesto',
        'descuento',
        'total',
        'estado',
        'tipo_pago',
        'observaciones'
    ];

    protected $casts = [
        'fecha_compra' => 'date',
        'fecha_recepcion' => 'date',
        'total' => 'decimal:2',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = 'detalles_ventas'; // Matches migration now

    protected $fillable = [
        'venta_id', 'producto_id', 'servicio_medico_id', 'descripcion',
        'cantidad', 'precio_unitario', 'subtotal'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

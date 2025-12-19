<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'categoria_id', 'codigo_barras', 'codigo_interno', 'nombre',
        'descripcion', 'marca', 'presentacion', 'precio_compra',
        'precio_venta', 'margen_ganancia', 'stock_actual', 'stock_minimo',
        'stock_maximo', 'ubicacion_bodega', 'activo'
    ];

    public function categoria() {
        return $this->belongsTo(CategoriaProducto::class, 'categoria_id');
    }
}

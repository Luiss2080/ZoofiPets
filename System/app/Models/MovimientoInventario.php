<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    use HasFactory;
    protected $table = 'movimientos_inventario';
    protected $fillable = ['producto_id', 'tipo', 'cantidad', 'motivo', 'fecha', 'usuario_id'];
    
    // Relationships
    public function producto() {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function usuario() {
        return $this->belongsTo(User::class, 'usuario_id'); // Assuming standard User model matches
    }
}

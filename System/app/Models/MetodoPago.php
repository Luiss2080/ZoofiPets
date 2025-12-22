<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    protected $table = 'metodos_pago'; 

    protected $fillable = [
        'nombre',
        'descripcion',
        'comision_porcentaje',
        'activo'
    ];

    protected $casts = [
        'activo' => 'boolean',
        'comision_porcentaje' => 'decimal:2',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}

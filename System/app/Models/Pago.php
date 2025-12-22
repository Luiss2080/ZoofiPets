<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';

    protected $fillable = [
        'venta_id',
        'metodo_pago_id',
        'monto',
        'referencia',
        'comision',
        'observaciones'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function metodoPago()
    {
        return $this->belongsTo(MetodoPago::class);
    }
}

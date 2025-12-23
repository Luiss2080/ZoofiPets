<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospitalizacion extends Model
{
    use HasFactory;

    protected $table = 'hospitalizaciones';

    protected $guarded = ['id'];

    protected $casts = [
        'fecha_ingreso' => 'datetime',
        'fecha_alta_estimada' => 'datetime',
        'fecha_alta_real' => 'datetime',
        'costo_total' => 'decimal:2',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }

    public function veterinario()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}

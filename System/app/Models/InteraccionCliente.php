<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteraccionCliente extends Model
{
    use HasFactory;

    protected $table = 'interacciones_clientes';
    protected $guarded = ['id'];
    protected $casts = [
        'fecha_interaccion' => 'datetime',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}

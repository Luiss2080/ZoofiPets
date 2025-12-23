<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaEspera extends Model
{
    use HasFactory;

    protected $table = 'sala_espera';
    protected $guarded = ['id'];
    protected $casts = [
        'hora_llegada' => 'datetime',
        'hora_atencion' => 'datetime',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }

    public function cita()
    {
        return $this->belongsTo(CitaMedica::class, 'cita_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'permiso_role');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

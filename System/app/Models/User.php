<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'apellido',
        'profesion',
        'nivel_estudios',
        'ci',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'biografia',
        'rol',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    /**
     * Get the role associated with the user.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Scope a query to only include users with a given role.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $roleName
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByRole($query, $roleName)
    {
        return $query->whereHas('role', function ($q) use ($roleName) {
            $q->where('nombre', $roleName);
        });
    }
}

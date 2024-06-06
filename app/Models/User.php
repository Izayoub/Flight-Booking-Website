<?php

namespace App\Models;

// use Illuminate\Contracts\AuthManager\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    // Les attributs qui sont assignables en masse.
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    // Les attributs qui doivent être cachés pour les tableaux.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Les types de données des attributs.
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];
}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'family_id',
        'family_role',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }
}

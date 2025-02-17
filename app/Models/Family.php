<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
        'username',
        'display',
        'surname',
        'password',
        'link',
        'expiration'
    ];

    protected $casts = [
        'password' => 'hashed',
        'expiration' => 'datetime',  // Handles integer timestamps well
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

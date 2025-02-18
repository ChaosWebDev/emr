<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'family_id',
        'name',
        'dob',
        'sex',
        'gender'
    ];

    public function family() {
        return $this->belongsTo(Family::class);
    }
}

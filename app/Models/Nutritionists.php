<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutritionists extends Model
{
    protected $fillable = [
        'user_id',
        'certifications',
        'experience',
        'bio'
    ];


    public function userall()
    {
        return $this->belongsTo(userall::class, 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointments::class, 'nutritionists_id');
    }
}

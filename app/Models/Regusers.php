<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regusers extends Model
{
    protected $fillable = [
        'user_id',
        'gender',
        'age',
        'height',
        'weight',
        'goal',
        'exer_type'
    ];

    public function userall()
    {
        return $this->belongsTo(userall::class, 'id');
    }
}

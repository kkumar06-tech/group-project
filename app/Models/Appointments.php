<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{


    protected $fillable = [
        'regusers_id',
        'nutritionists_id',
        'date',
        'time',
        'status'
    ];



    public function regusers()
    {
        return $this->belongsTo(Regusers::class, 'id');
    }
    
    public function nutritionists()
    {
        return $this->belongsTo(Nutritionists::class, 'id');
    }
}

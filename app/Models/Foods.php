<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    

    public function foodlogs()
    {
        return $this->belongsToMany(Foodlogs::class,'food_foodlog');
    }

}

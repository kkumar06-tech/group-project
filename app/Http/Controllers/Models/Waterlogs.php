<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waterlogs extends Model
{
   
    public function userall()
    {
        return $this->belongsTo(userall::class, 'id');
    }


}

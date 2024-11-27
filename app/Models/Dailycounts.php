<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dailycounts extends Model
{

    public function useralls()
    {
        return $this->belongsTo(userall::class, 'id');
    }

}

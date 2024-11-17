<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foodlogs extends Model
{
    protected $fillable = [
        'user_id',
        'food_id',
        'qunatity',
        'date'
    ];


    public function foods()
    {
        return $this->belongsTo(Foods::class,'id');
    }

}

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
        return $this->belongsToMany(Foods::class,'food_foodlog');
    }

    public function userall()
    {
        return $this->belongsTo(Alluser::class, 'id');
    }

}

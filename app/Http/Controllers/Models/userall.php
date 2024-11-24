<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userall extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];


    public function regusers()
    {
        return $this->hasOne(Regusers::class, 'user_id');
    }

    public function nutritionists()
    {
        return $this->hasOne(Nutritionists::class, 'user_id');
    }

    public function dailycounts()
    {
        return $this->hasOne(Dailycounts::class, 'user_id');
    }

    public function foodlogs()
    {
        return $this->hasMany(Foodlogs::class, 'user_id');
    }
    
    public function waterlogs()
    {
        return $this->hasMany(Waterlogs::class, 'user_id');
    }


}

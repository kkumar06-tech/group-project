<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'instructions',
        'calories',
        'protein',
        'carbs',
        'fats',
    ];

  
    protected $casts = [
        'ingredients' => 'array', //  store ingredients as a JSON array
    ];
}

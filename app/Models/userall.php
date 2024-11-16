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
}

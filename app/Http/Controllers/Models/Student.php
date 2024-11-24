<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['name','mat_no'];
  

    public function roles()
{
    return $this->hasMany(Role::class, 'student_id');
}
}

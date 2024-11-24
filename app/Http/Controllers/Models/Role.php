<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name','mat_no'];  
    
    
    public function student()
{
    return $this->belongsTo(Student::class, 'id');
}
}

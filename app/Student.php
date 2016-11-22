<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function CourseandStudent()
    {
      return $this->belongsToMany('App\CourseandStudent');
    }
}

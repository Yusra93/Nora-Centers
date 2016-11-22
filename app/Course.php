<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function CourseComponent()
    {
      return $this->hasMany('App\CourseComponent');
    }

    public function CourseandStudent()
    {
      return $this->belongsToMany('App\CourseandStudent');
    }
}

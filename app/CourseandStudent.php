<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseandStudent extends Model
{
    public function Student()
    {
      return $this->belongsToMany('App\Student');
    }

    public function Course()
    {
      return $this->belongsToMany('App\Course');
    }
}

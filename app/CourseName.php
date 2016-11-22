<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseName extends Model
{
    public function Course()
    {
      return $this->hasMany('App\Course');
    }
}

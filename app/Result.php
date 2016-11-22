<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function Student()
    {
      return $this->hasMany('App\Student');
    }

    public function Course()
    {
      return $this->hasMany('App\Course');
    }
}

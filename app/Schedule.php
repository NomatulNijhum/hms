<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{


  function relationBetweenDoctor(){
      return $this->hasOne('App\Doctor','id','doctor_id');
  }

}

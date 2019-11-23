<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

protected $fillable = [
  'name',
  'email',
  'password',
];




    function relationBetweenDepartment(){
        return $this->hasOne('App\Department','id','department_id');
    }

}

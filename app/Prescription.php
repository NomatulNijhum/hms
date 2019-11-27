<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{


                    public function relationBetweenPatient(){
                        return $this->hasOne('App\Patient','id','patient_id');
                    }

}

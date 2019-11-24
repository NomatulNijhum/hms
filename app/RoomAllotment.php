<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomAllotment extends Model
{

        public function relationBetweenPatient(){
            return $this->hasOne('App\Patient','id','patient_id');
        }


          


            public function relationBetweenDoctor(){
                return $this->hasOne('App\Doctor','id','doctor_id');
            }

}

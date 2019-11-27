<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Schedule;
use App\Doctor;

class ScheduleController extends Controller
{

  function index()
  {

      $doctors = Doctor::all();
      return view ('Dashboard.Schedule.addschedule',compact('doctors'));

  }

  function create(Request $request)
  {
    Schedule::insert([
      'doctor_id'=>$request->doctor_id,
      'available_days'=>$request->available_days,
     'available_dates'=>$request->available_dates,
    'available_times'=>$request->available_times,
    'available_time'=>$request->available_time,

        'created_at' => Carbon::now(),


    ]);
}

        //edit schedule

        function single_schedule($schedule_id)
        {
          $single_schedule=  Schedule::find($schedule_id);
            return view ('Dashboard.Schedule.edit_schedule',compact('single_schedule'));
        }



        function deleteschedule($schedule_id)
        {
      Schedule::findOrFail($schedule_id)->delete();
        return back();
        }








}

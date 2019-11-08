<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Schedule;

class ScheduleController extends Controller
{

  function index()
  {
      return view ('Dashboard.Schedule.addschedule');
  }

  function create(Request $request)
  {
    Schedule::insert([
      'doctor_name'=>$request->doctor_name,
      'available_days'=>$request->available_days,
      'available_times'=>$request->available_times,
      'serial_visibility'=>$request->serial_visibility,
        'created_at' => Carbon::now(),


    ]);
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Appointment;
class AppointmentController extends Controller
{
  function index()
  {
      return view ('Dashboard.Appointment.addappointment');
  }

  function create(Request $request)
  {
    Appointment::insert([
      'patient_id'=>$request->patient_id,
      'department'=>$request->department,
      'doctor_name'=>$request->doctor_name,
      'appointment_date'=>$request->appointment_date,
      'time_slot'=>$request->time_slot,
      'token_number'=>$request->token_number,
      'problem'=>$request->problem,
        'created_at' => Carbon::now(),




    ]);
}


}

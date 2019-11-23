<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Appointment;
use App\Patient;
use App\Department;
use App\Doctor;
class AppointmentController extends Controller
{
  function index()
  {



      $patients = Patient::all();
      $departments = Department::all();
      $doctors = Doctor::all();

      return view ('Dashboard.Appointment.addappointment',compact('patients','departments','doctors'));

  }

  function create(Request $request)
  {
    Appointment::insert([
      'patient_id'=>$request->patient_id,
  'department_id'=>$request->department_id,
      'doctor_id'=>$request->doctor_id,
      'appointment_date'=>$request->appointment_date,

      'token_number'=>$request->token_number,
      'problem'=>$request->problem,
        'created_at' => Carbon::now(),




    ]);

  return back();

}

function allappointment()
{

   $appointments = appointment::all();
   // echo $users;
 return view('Dashboard.Appointment.allappointment',compact('appointments'));
}








}

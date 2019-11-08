<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Deathreport;

class DeathreportController extends Controller
{
  function index()
  {
      return view ('Dashboard.Activities.add_death_report');
  }

  function create(Request $request)
  {
  Deathreport::insert([
      'patient_id'=>$request->patient_id,
      'date'=>$request->date,
      'title'=>$request->title,
      'description'=>$request->description,
      'doctor_name'=>$request->doctor_name,
      'created_at' => Carbon::now(),


    ]);
  }
  function alldeathreport()
  {

     $deathreports = Deathreport::all();
     // echo $users;
   return view('Dashboard.Activities.all_death_report',compact('deathreports'));
  }


}

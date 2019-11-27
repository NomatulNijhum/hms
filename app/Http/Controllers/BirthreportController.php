<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Birthreport;
use App\Patient;
class BirthreportController extends Controller
{

          function index()
          {$patients = Patient::all();
              return view ('Dashboard.Activities.add_birth_report',compact('patients'));
          }

          function create(Request $request)
          {
            Birthreport::insert([
              'patient_id'=>$request->patient_id,
              'date'=>$request->date,
              'title'=>$request->title,
              'description'=>$request->description,
              'doctor_name'=>$request->doctor_name,
              'created_at' => Carbon::now(),


            ]);

                  return back();
          }
          function allbirthreport()
          {

             $birthreports = Birthreport::all();
             // echo $users;
           return view('Dashboard.Activities.all_birth_report',compact('birthreports'));
          }

          //edit patients

          function single_birthreport($birthreport_id)
          {
            $patients = Patient::all();
            $single_birthreport=Birthreport::find($birthreport_id);
              return view ('Dashboard.Activities.edit_birth_report',compact('single_birthreport','patients'));
          }



          function deletebirthreport($birthreport_id)
          {
        Birthreport::findOrFail($birthreport_id)->delete();
          return back();
          }







}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Patient;
class PatientController extends Controller
{

        function index()
        {
            return view ('Dashboard.Patient.index');
        }





      function create(Request $request)
      {
        Patient::insert([
          'Patient_Name'=>$request->Patient_Name,
          'Date_Of_Birth'=>$request->Date_Of_Birth,
          'Age'=>$request->Age,
          'Phone'=>$request->Phone,
          'Email'=>$request->Email,
          'Gender'=>$request->Gender,
          'Address'=>$request->Address,
          'File'=>$request->File,
          'created_at' => Carbon::now(),


        ]);
      }
      function allpatient()
      {

         $patients = Patient::all();
         // echo $users;
       return view('Dashboard.Patient.allpatient',compact('patients'));
      }

              function patientdetails()
              {
                  return view ('Dashboard.Patient.patientdetails');
              }




}

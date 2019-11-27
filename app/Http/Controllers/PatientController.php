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
        if ($request->Picture) {
      $file=$request->File('Picture');
      $ext=$file->getClientOriginalExtension();
      $filename=$request->email . '.' . $ext;
      $file->move('images/',$filename);
    }




        Patient::insert([
          'Patient_Name'=>$request->Patient_Name,
          'Date_Of_Birth'=>$request->Date_Of_Birth,
          'Age'=>$request->Age ,
          'Phone'=>$request->Phone,
          'Email'=>$request->Email,
          'Gender'=>$request->Gender,
          'Address'=>$request->Address,
          'Picture' => $filename,
          'created_at' => Carbon::now(),

        ]);

        return back();

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



//edit patients

function single_patient($patient_id)
{
  $single_patient=Patient::find($patient_id);
    return view ('Dashboard.Patient.edit_patient',compact('single_patient'));
}



function deletepatient($patient_id)
{
Patient::findOrFail($patient_id)->delete();
return back();
}






}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
use Carbon\Carbon;
use App\Patient;

class PrescriptionController extends Controller
{
  function index()
{

$patients = Patient::all();

    return view ('Dashboard.Prescription.add_case_study',compact('patients'));
}

function create(Request $request)
{
  Prescription::insert([

    'patient_id'=>$request->patient_id,
'food_allergies'=>$request->food_allergies,
'tendency_bleed'=>$request->tendency_bleed,
'heart_disease'=>$request->heart_disease,
'blood_pressure'=>$request->blood_pressure,
'diabetic'=>$request->diabetic,
  'surgery'=>$request->surgery,
  'accident'=>$request->accident,
  'family_medical_history'=>$request->family_medical_history,
    'current_medication'=>$request->current_medication,
      'female_pregnancy'=>$request->female_pregnancy,
      'breast_feeding'=>$request->breast_feeding,
      'others'=>$request->others,
      'health_insurance'=>$request->health_insurance,
      'low_income'=>$request->low_income,
      'reference'=>$request->reference,
    'created_at' => Carbon::now(),



  ]);

      return back();
}


function allcasestudy()
{

   $prescriptions =   Prescription::all();
   // echo $users;
 return view('Dashboard.Prescription.all_case_study',compact('prescriptions'));
}


  //edit prescription
  function single_prescription($prescription_id)
  {
    $single_prescription=Prescription::find($prescription_id);
      return view ('Dashboard.Prescription.edit_prescription',compact('single_prescription'));
  }



  function deleteprescription($prescription_id)
  {
  Prescription::findOrFail($prescription_id)->delete();
  return back();
  }







}

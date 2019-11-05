<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Investigation;

class InvestigationController extends Controller
{

              function index()
              {
                  return view ('Dashboard.Activities.add_investigation_report');
              }

              function create(Request $request)
              {
              Investigation::insert([
                  'patient_id'=>$request->patient_id,
                  'date'=>$request->date,
                  'title'=>$request->title,
                  'description'=>$request->description,
                  'doctor_name'=>$request->doctor_name,
                  'file'=>$request->file,

                  'created_at' => Carbon::now(),


                ]);
              }


}

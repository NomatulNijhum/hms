<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Operationreport;

class OperationreportController extends Controller
{

            function index()
            {
                return view ('Dashboard.Activities.add_operation_report');
            }

            function create(Request $request)
            {
              Operationreport::insert([
                'patient_id'=>$request->patient_id,
                'date'=>$request->date,
                'title'=>$request->title,
                'description'=>$request->description,
                'doctor_name'=>$request->doctor_name,
                'created_at' => Carbon::now(),


              ]);
            }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Carbon\Carbon;
use App\RoomAllotment;
use App\Patient;
use App\Doctor;

class RoomAllotmentController extends Controller
{


            function index()
            {
                    $patients = Patient::all();
                    $doctors = Doctor::all();
                  return view ('Dashboard.RoomAllotment.addroom',compact('patients','doctors'));


            }




            function create(Request $request)
            {
              RoomAllotment::insert([

            'room_number'=>$request->room_number,
            'room_type'=>$request->room_type,
            'patient_id'=>$request->patient_id,
            'doctor_id'=>$request->doctor_id,
            'allot_date'=>$request->allot_date,
            'discharge_date'=>$request->discharge_date,

            'created_at' => Carbon::now(),



              ]);

            return back();

          }


          function allroom()
          {

             $room_allotments = RoomAllotment::all();
             // echo $users;
           return view('Dashboard.RoomAllotment.allroom',compact('room_allotments'));
          }





}

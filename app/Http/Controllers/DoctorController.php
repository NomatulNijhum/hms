<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Doctor;
class DoctorController extends Controller
{

function index()
{
    return view ('Dashboard.Doctor.index');
}

            function create(Request $request)
            {
              $min=Carbon::now()->subYears(18);

              $request->validate([
                'date_of_birth' => "required|before:$min"
              ]);
            Doctor::insert([
                'doctor_name'=>$request->doctor_name,
                'date_of_birth'=>$request->date_of_birth,
                'department_name'=>$request->department_name,
                'experience'=>$request->experience,
                'age'=>$request->age,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'doctor_details'=>$request->doctor_details,
                'address'=>$request->address,
                'picture'=>$request->picture,
                'created_at' => Carbon::now(),


              ]);
            }

            function alldoctor()
            {

               $doctors = doctor::all();
               // echo $users;
             return view('Dashboard.Doctor.alldoctor',compact('doctors'));
            }






}

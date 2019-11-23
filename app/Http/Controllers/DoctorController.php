<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Doctor;
use App\Department;
class DoctorController extends Controller
{


          function index()
          {
              $departments = Department::all();

              return view ('Dashboard.Doctor.index',compact('departments'));
          }

            function create(Request $request)
            {
              $min=Carbon::now()->subYears(18);

              $request->validate([
                'date_of_birth' => "required|before:$min"
              ]);

              if ($request->picture) {
            $file=$request->File('picture');
            $ext=$file->getClientOriginalExtension();
            $filename=$request->email . '.' . $ext;
            $file->move('images/',$filename);
          }
            Doctor::insert([
                'doctor_name'=>$request->doctor_name,
                'date_of_birth'=>$request->date_of_birth,
                'department_id'=>$request->department_id,
                'experience'=>$request->experience,
                'age'=>$request->age,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'doctor_details'=>$request->doctor_details,
                'address'=>$request->address,
                'picture' => $filename,
                'created_at' => Carbon::now(),


              ]);

              return back();
            }

            function alldoctor()
            {

               $doctors = doctor::all();
               // echo $users;
             return view('Dashboard.Doctor.alldoctor',compact('doctors'));
            }






}

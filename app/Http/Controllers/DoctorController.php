<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\doctor;
class DoctorController extends Controller
{

function index()
{
    return view ('Dashboard.Doctor.index');
}

            function create(Request $request)
            {
            doctor::insert([
                'doctor_name'=>$request->doctor_name,
                'date_of_birth'=>$request->date_of_birth,
                'specialization'=>$request->specialization,
                'experience'=>$request->experience,
                'age'=>$request->age,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'doctor_details'=>$request->doctor_details,
                'address'=>$request->address,
                'file'=>$request->file,



              ]);
            }






}

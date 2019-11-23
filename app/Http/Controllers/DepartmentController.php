<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Department;

class DepartmentController extends Controller
{
  function index()
  {
      return view ('Dashboard.Department.adddepartment');
  }



        function create(Request $request)
        {
          Department::insert([
            'department_name'=>$request->department_name,
            'description'=>$request->description,
            'created_at' => Carbon::now(),


          ]);

              return back();
        }

        function alldepartment()
        {

           $departments = Department::all();
           // echo $users;
         return view('Dashboard.Department.alldepartment',compact('departments'));
        }
}

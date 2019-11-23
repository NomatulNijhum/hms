<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Carbon\Carbon;
class RoleController extends Controller
{
  function index(){
    return view('role.index');
  }

  function create(Request $request){
    Role::insert([
      'role_name' =>$request->role_Name,
        'created_at' => Carbon::now(),
    ]);
    return back();
  }
  function allrole()
  {

     $roles = role::all();
     // echo $users;
   return view('role.allrole',compact('roles'));
  }



}

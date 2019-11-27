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





    //edit role

    function single_role($role_id)
    {
      $single_role=Role::find($role_id);
        return view ('role.edit_role',compact('single_role'));
    }

    function deleterole($role_id)
    {
    Role::findOrFail($role_id)->delete();
    return back();
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Role;

class RegistrationController extends Controller
{
    function index()
    {
        $roles = Role::all();

        return view('auth.register',compact('roles'));
    }

    function create(Request $request){
            User::insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
            'role_id' =>$request->role_id,
            'created_at' => Carbon::now(),

        ]);

        return back();
    //User::insert($request->except('_token'));
    }
}

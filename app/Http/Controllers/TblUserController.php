<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tbl_user;


class TblUserController extends Controller

{

  function index()
  {
      return view ('BloodBank.userregistration');
  }


function create(Request $request)
  {






        $data=array();
    	$data['user_id']=$request->user_id;
    	$data['user_name']=$request->un;
    	$data['user_age']=$request->uage;
      $data['user_designation']=$request->ud;
    	$data['user_email']=$request->ue;
    	$data['user_address']=$request->ua;
    	$data['user_password']=$request->up;
    	$data['user_con_password']=$request->cp;
    	$data['user_blood_group']=$request->bg;
      $data['user_phone']=$request->uph;

  






  }



}

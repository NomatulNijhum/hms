<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Carbon\Carbon;
class NoticeController extends Controller
{
  function index()
  {
      return view ('Dashboard.Noticeboard.add_notice');
  }
  function create(Request $request)
  {
  Notice::insert([
      'title'=>$request->title,
      'description'=>$request->description,
      'start_date'=>$request->start_date,
      'end_date'=>$request->end_date,
      'created_at' => Carbon::now(),


    ]);
  }
}

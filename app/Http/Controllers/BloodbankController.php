<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodbankController extends Controller
{
  function index()
  {

    return view ('BloodBank.bloodindex');
    }

}

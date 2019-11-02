<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeathreportController extends Controller
{
  function index()
  {
      return view ('Dashboard.Activities.add_death_report');
  }

}

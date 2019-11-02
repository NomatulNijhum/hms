<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthreportController extends Controller
{

          function index()
          {
              return view ('Dashboard.Activities.add_birth_report');
          }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestigationController extends Controller
{

              function index()
              {
                  return view ('Dashboard.Activities.add_investigation_report');
              }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationreportController extends Controller
{

            function index()
            {
                return view ('Dashboard.Activities.add_operation_report');
            }

}

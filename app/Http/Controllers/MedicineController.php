<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{

                function index()
                {
                    return view ('Dashboard.Activities.add_medicine');
                }
}

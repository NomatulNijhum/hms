<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  function index()
  {
      return view ('Dashboard.Department.adddepartment');
  }
}

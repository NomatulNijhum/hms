<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardhomeController extends Controller
{
    function index()
    {
    return view ('Dashboard.Home.index');
    }
  }

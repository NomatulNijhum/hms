<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Medicine;
class MedicineController extends Controller
{

                function index()
                {
                    return view ('Dashboard.Activities.add_medicine');
                }


                function create(Request $request)
                {
                  Medicine::insert([
                    'medicine_name'=>$request->medicine_name,
                    'category_name'=>$request->category_name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'manufactured_by'=>$request->manufactured_by,

                    'created_at' => Carbon::now(),


                  ]);
                }
                function allmedicine()
                {

                   $medicines =  Medicine::all();
                   // echo $users;
                 return view('Dashboard.Activities.all_medicine',compact('medicines'));
                }



}

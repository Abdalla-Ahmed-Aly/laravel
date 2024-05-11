<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class Employees extends Controller
{
  function get_data_employee(){
 $employee=employee::get();
 return response()->json(["status"=>"done","data"=>$employee]);


  }
}

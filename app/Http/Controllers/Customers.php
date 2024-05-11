<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class Customers extends Controller
{


function get_data_customer()  {
    
    $customer=customer::get();
    return   response()->json(["status"=>"done","data"=>$customer]);

}



}

<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class Reviews extends Controller
{
    function get_data_review(){
 $review=review::get();
 return response()->json(["status"=>"done","data"=>$review]);
 

    }
}

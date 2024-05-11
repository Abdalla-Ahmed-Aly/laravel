<?php

namespace App\Http\Controllers;

use App\Models\theater;
use Illuminate\Http\Request;

class theaters extends Controller
{

function get_data_theater(){
$theater=theater::get();
return response()->json(["status"=>"done","data"=>$theater]);


}
}

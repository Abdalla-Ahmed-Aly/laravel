<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class movies extends Controller
{

function get_data_movie(){
 $movie=movie::get();
 return response()->json(["status"=>"done","data"=>$movie]);



}

}

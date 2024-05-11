<?php

namespace App\Http\Controllers;

use App\Models\showtime;
use Illuminate\Http\Request;

class Showtimes extends Controller
{
    function get_data_showtime()  {
        $showtime=showtime::get();
        return response()->json(["status"=>"done","data"=>$showtime]);

    }
}

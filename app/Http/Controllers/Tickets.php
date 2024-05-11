<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;

class Tickets extends Controller
{

function get_data_ticket()  {
    $ticket=ticket::get();
    return response()->json(["status"=>"done","data"=>$ticket]);

}

}

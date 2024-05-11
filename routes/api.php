<?php

use Illuminate\Http\Request;
use App\Http\Controllers\movies;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\Tickets;
use App\Http\Controllers\theaters;
use App\Http\Controllers\Customers;
use App\Http\Controllers\Employees;
use App\Http\Controllers\Showtimes;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/student',[Students::class,'getdata']);
// Route::get('/studentbyid',[Students::class,'getdatabyid']);
// Route::get('/studentbyid',[Students::class,'getdatabyid']);

Route::get('/movie',[movies::class,'get_data_movie']);

Route::get('/theater',[theaters::class,'get_data_theater']);
Route::get('/customer',[Customers::class,'get_data_customer']);
Route::get('/employee',[Employees::class,'get_data_employee']);
Route::get('/showtime',[Showtimes::class,'get_data_showtime']);
Route::get('/theaters',[theaters::class,'get_data_theater']);
Route::get('/ticket',[Tickets::class,'get_data_ticket']);
Route::get('/reviews',[Reviews::class,'get_data_review']);

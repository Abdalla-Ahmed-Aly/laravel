<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ticketTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
 'customer_id'=>'1',
 'showtime_id'=>'1',
 'seat_number'=>'1',
 'price'=>'100'
 
    

        ]);
    }
}

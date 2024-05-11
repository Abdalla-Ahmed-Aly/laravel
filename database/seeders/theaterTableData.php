<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class theaterTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('theaters')->insert([

'theater_name'=>'abdoo',
'seating_capacity'=>'1',
'screen_size'=>'2',
'sound_system'=>'s'
        ]);
        }
}

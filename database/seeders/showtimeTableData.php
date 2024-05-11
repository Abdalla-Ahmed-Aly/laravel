<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class showtimeTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('showtimes')->insert([
        'movie_id'=>'1',
        'theater_id'=>'1',
        'start_time'=>'18:04:19',
        'end_time'=>'18:04:19'


        ]);
    }
}

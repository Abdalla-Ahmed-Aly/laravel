<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class reviewTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([

     'movie_id'=>'1',
     'reviewer_name'=>'Abdoo',
     'rating'=>'2',
     'review_text'=>'very good',
     'review_date'=>'2024-05-15'

        ]);
    }
}

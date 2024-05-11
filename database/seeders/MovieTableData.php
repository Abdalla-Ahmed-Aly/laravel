<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([

            'title'=>'Abdoo',
            'director'=>'b',
            'genre'=>'b',
            'release_date'=>'2024-05-15',
            'duration'=>'16:26:48',
            'rating'=>'1',

        ]


        );
    }
}

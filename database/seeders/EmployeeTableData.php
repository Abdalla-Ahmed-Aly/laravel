<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class EmployeeTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('employees')->insert([
  
'name'=>'Abdoonew',
'position'=>'1000',
'contact_details'=>'hh'


       ]);
    }
}

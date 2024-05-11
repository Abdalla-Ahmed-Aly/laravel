<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MovieTableData;
use Database\Seeders\reviewTableData;
use Database\Seeders\ticketTableData;
use Database\Seeders\theaterTableData;
use Database\Seeders\customerTableData;
use Database\Seeders\EmployeeTableData;
use Database\Seeders\showtimeTableData;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
      $this->Call([
        customerTableData::class,
        EmployeeTableData::class,
        MovieTableData::class,
        reviewTableData::class,
        showtimeTableData::class,
        theaterTableData::class,
        ticketTableData::class
      ]);

      
    }
}

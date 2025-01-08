<?php

namespace App;

require 'vendor/autoload.php';

use App\SalaryData; 
use Carbon\Carbon;
use App\Bonus;
use App\Salary;

class Output
{
    private array $salaryDates = [];

    public function run($filename): void
    {
        $count = 0;

        while($count <= 11)
        {
            $count++;

            $salaryData = new SalaryData();

            $date = Carbon::today()->startOfMonth()->addMonth($count);

            //Set Month
            $salaryData->setMonth($date->format('F'));
            
            //Set Salary Date
            $salaryData->setSalaryDate(Salary::getSalaryDate($date));

            //Set Bonus Date
            $salaryData->setBonusDate(Bonus::getBonusDate($date));

            $this->salaryDates[] = $salaryData; 
        }


        $csvOutput = fopen($filename, 'w'); 

        fputcsv($csvOutput, SalaryData::CSV_HEADERS);

        foreach ($this->salaryDates as $month) { 
            fputcsv($csvOutput, (array) $month); 
        } 
        fclose($csvOutput); 
    }
}

$output = new Output();

$filename = 'SalaryOuput.csv';
if(isset($argv[1]))
{
    $filename = $argv[1];
    if(!str_ends_with($filename, '.csv')){
        $filename = $filename . '.csv';
    }
}

$output->run($filename);


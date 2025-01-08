<?php

use App\Bonus;
use App\Salary;
use Carbon\Carbon;
use App\SalaryData;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';

class classTest extends TestCase
{
    public function testBonusClass()
    {
        $date = Carbon::today()->startOfMonth();

        $result = Bonus::getBonusDate($date);

        $newDate = Carbon::createFromFormat('Y-m-d',  $result); 

        $this->assertTrue( 
            $newDate->isWeekday(), 
            "This is a weekday"
        );         
    }

    //Making sure to test with a Saturday
    //Test above will not always test this case depending on the month ran
    public function testBonusWeekendDate()
    {
        $date = Carbon::today()->next('Saturday');

        $result = Salary::getSalaryDate($date);

        $newDate = Carbon::createFromFormat('Y-m-d',  $result); 

        $this->assertTrue( 
            $newDate->isWeekday(), 
            "This is a weekday"
        );         
    }

    public function testSalaryClass()
    {
        $date = Carbon::today()->startOfMonth();

        $result = Salary::getSalaryDate($date);

        $newDate = Carbon::createFromFormat('Y-m-d',  $result); 

        $this->assertTrue( 
            $newDate->isWeekday(), 
            "This is a weekday"
        );         
    }

    //Making sure to test with a Saturday
    //Test above will not always test this case depending on the month ran
    public function testSalaryWeekendDate()
    {
        $date = Carbon::today()->next('Saturday');

        $result = Salary::getSalaryDate($date);

        $newDate = Carbon::createFromFormat('Y-m-d',  $result); 

        $this->assertTrue( 
            $newDate->isWeekday(), 
            "This is a weekday"
        );         
    }

    public function testSalaryDataMonth()
    {
        $date = Carbon::today();

        $salaryData = new SalaryData();

        $salaryData->setMonth($date->format('F'));

        $this->assertEquals($date->format('F'), $salaryData->getMonth());
    }

    public function testSalaryDataSalary()
    {
        $date = Carbon::today();

        $salaryData = new SalaryData();

        $salaryData->setSalaryDate($date);
        
        $this->assertEquals($date, $salaryData->getSalaryDate());
    }

    public function testSalaryDataBonus()
    {
        $date = Carbon::today();

        $salaryData = new SalaryData();

        $salaryData->setBonusDate($date);
        
        $this->assertEquals($date, $salaryData->getBonusDate());
    }
}
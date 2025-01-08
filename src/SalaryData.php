<?php

namespace App; 


class SalaryData
{
    private $month;
    private $salaryDate;
    private $bonusDate;
    const CSV_HEADERS = ['Month', 'Salary Date', 'Bonus Date'];


    public function setMonth($month)
    {
        $this->month = $month;
    }

    public function setSalaryDate($salaryDate)
    {
        $this->salaryDate = $salaryDate;
    }

    public function setBonusDate($bonusDate)
    {
        $this->bonusDate = $bonusDate;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getSalaryDate()
    {
        return $this->salaryDate;
    }

    public function getBonusDate()
    {
        return $this->bonusDate;
    }
}

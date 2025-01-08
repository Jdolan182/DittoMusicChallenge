<?php

namespace App;

class Salary
{

    public static function getSalaryDate($date): String
    {
        $endDate = $date->copy()->endOfMonth();

        if($endDate->format('D') == 'Sat' || $endDate->format('D') == 'Sun')
        {
            return $endDate->previousWeekday()->format('Y-m-d');
        }
        else {
            return $endDate->format('Y-m-d');
        }

    }
}

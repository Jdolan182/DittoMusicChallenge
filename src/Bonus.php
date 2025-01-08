<?php

namespace App;

class Bonus
{
    public static function getBonusDate($date): String
    {
        $bonusDate = $date->copy()->addDays(14);

        if($bonusDate->format('D') == 'Sat' || $bonusDate->format('D') == 'Sun')
        {
            return $bonusDate->next('Wednesday')->format('Y-m-d');
        }
        else {
            return $bonusDate->format('Y-m-d');
        }
    }
}

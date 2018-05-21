<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 18.5.21
 * Time: 23.57
 */

namespace App\Service;


class NumberFormatter
{
    public function format($floatNumber)
    {
        $minus = "";
        if ($floatNumber < 0) {
            $minus = '-';
            $floatNumber*=-1;
        }

        if ($floatNumber >= 999500) {
            return $minus . number_format($floatNumber / 1000000, 2,".","") . "M";
        }
        else if ($floatNumber >= 99950) {
            return $minus . number_format($floatNumber / 1000,0,".","") . "K";
        }
        else if ($floatNumber >= 999.995) {                          //padaryta pagal pastaba, bet trecias punktas priestarauja
            return $minus . number_format($floatNumber,0,"."," ");
        } else {
            return $minus . number_format($floatNumber, 2,"."," ");
        }
    }
}
<?php

namespace App\Http\Controllers;

class ChartController extends Controller
{
    const X_DAYS_AGO_FROM = 10;

    public static function selectToday()
    {
        return self::getDate(0);
    }

    public static function selectOldDay()
    {
        return self::getDate(self::X_DAYS_AGO_FROM);
    }

    /**
     * @param int $i
     * @param array $dates
     * @return array
     * @author selcukmart
     * 7.01.2022
     * 17:12
     */
    private static function getDate(int $i): string
    {
        return date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - $i, date("Y")));

    }
}

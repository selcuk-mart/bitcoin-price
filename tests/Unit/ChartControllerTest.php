<?php
/**
 * @author selcukmart
 * 9.01.2022
 * 11:45
 */

namespace Tests\Unit;

use App\Http\Controllers\ChartController;
use PHPUnit\Framework\TestCase;

class ChartControllerTest extends  TestCase
{
    public function test_selectToday(){
        $this->assertSame(date('Y-m-d'),ChartController::selectToday());
    }

    public function test_selectOldDay(){
        $this->assertSame( date('Y-m-d',mktime(0, 0, 0, date("m"), date("d") - 10, date("Y"))),ChartController::selectOldDay());
    }
}

<?php
include "../Power.php";

class PowerTest extends PHPUnit_Framework_TestCase
{
    public function testPowe()
    {
        $power = new Power();
        $this->assertEquals(pow(1, 1), $power->calculate(1, 1));
        $this->assertEquals(pow(3, 2), $power->calculate(3, 2));
        $this->assertEquals(pow(2, 3), $power->calculate(2, 3));
        $this->assertEquals(pow(2, 4), $power->calculate(2, 4));
        $this->assertEquals(pow(5, 3), $power->calculate(5, 3));
        $this->assertEquals(pow(6, 4), $power->calculate(6, 4));
        $this->assertEquals(pow(9, 2), $power->calculate(9, 2));
    }
}

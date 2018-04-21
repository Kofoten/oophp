<?php

namespace Rasb14\T100;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceTest extends TestCase
{
    /**
     * Testing create object.
     */
    public function testCreateObject()
    {
        $dice = new Dice();
        $this->assertInstanceOf("\Rasb14\T100\Dice", $dice);
        $this->assertEquals(6, $dice->getHistogramMax());

        $dice = new Dice(3);
        $this->assertInstanceOf("\Rasb14\T100\Dice", $dice);
        $this->assertEquals(3, $dice->getHistogramMax());
    }

    /**
     * Testing functions.
     */
    public function testFunctions()
    {
        $dice = new Dice();
        $this->assertContains($dice->roll(), [1, 2, 3, 4, 5, 6]);
        $this->assertContains($dice->value(), [1, 2, 3, 4, 5, 6]);
        $this->assertEquals(6, $dice->getHistogramMax());
    }
}

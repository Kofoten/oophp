<?php

namespace Rasb14\T100;

use PHPUnit\Framework\TestCase;

class DiceGraphicTest extends TestCase
{
    /**
     * Testing create object.
     */
    public function testCreateObject()
    {
        $dice = new DiceGraphic();
        $this->assertInstanceOf("\Rasb14\T100\DiceGraphic", $dice);
        $this->assertEquals(6, $dice->getHistogramMax());
    }

    /**
     * Testing graphic.
     */
    public function testGraphic()
    {
        $dice = new DiceGraphic();
        $dice->roll();
        $this->assertContains($dice->graphic(), ['dice-1', 'dice-2', 'dice-3', 'dice-4', 'dice-5', 'dice-6']);
    }
}

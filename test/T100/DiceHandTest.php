<?php

namespace Rasb14\T100;

use PHPUnit\Framework\TestCase;

class DiceHandTest extends TestCase
{
    /**
     * Testing create object.
     */
    public function testCreateObject()
    {
        $diceHand = new DiceHand(4);
        $diceHand->roll();
        $this->assertInstanceOf("\Rasb14\T100\DiceHand", $diceHand);
        $this->assertCount(4, $diceHand->values());
    }

    /**
     * Testing has value.
     */
    public function testAnyDieHasValue()
    {
        $diceHand = new DiceHand(99);
        $diceHand->roll();
        $this->assertFalse($diceHand->anyDieHasValue(0));
        $this->assertTrue($diceHand->anyDieHasValue(1));
    }

    /**
     * Testing sum.
     */
    public function testSum()
    {
        $diceHand = new DiceHand(5);
        $diceHand->roll();
        $this->assertGreaterThan(0, $diceHand->sum());
        $this->assertLessThanOrEqual(30, $diceHand->sum());
    }

    /**
     * Testing average.
     */
    public function testAverage()
    {
        $diceHand = new DiceHand(5);
        $diceHand->roll();
        $this->assertGreaterThan(0, $diceHand->average());
        $this->assertLessThanOrEqual(30, $diceHand->average());
    }

    /**
     * Testing graphic.
     */
    public function testGraphic()
    {
        $diceHand = new DiceHand(5);
        $diceHand->roll();
        $this->assertCount(5, $diceHand->graphic());
    }
    
    /**
     * Testing histogram.
     */
    public function testHistogram()
    {
        $diceHand = new DiceHand(1);
        $diceHand->roll();
        $this->assertStringStartsWith('<div class="gameRow">', $diceHand->htmlHistogram());
    }
}

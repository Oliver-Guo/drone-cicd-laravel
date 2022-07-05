<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalculateTest extends TestCase
{
    /**
     * @group Calculate
     */
    public function testAddition()
    {
        $a = 5;
        $b = 10;

        $actual = addition($a, $b);

        $this->assertEquals(15, $actual);

        return $actual;
    }

    /**
     * @group Calculate
     * @depends testAddition
     */
    public function testSubtraction(int $value)
    {
        $a = $value;
        $b = 3;

        $actual = subtraction($a, $b);

        $this->assertEquals(12, $actual);

        return $actual;
    }

    /**
     * @group Calculate
     * @depends testSubtraction
     */
    public function testMultiplication(int $value)
    {
        $a = $value;
        $b = 5;

        $actual = multiplication($a, $b);

        $this->assertEquals(60, $actual);
    }

}

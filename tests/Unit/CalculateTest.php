<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalculateTest extends TestCase
{
    public function testAddition()
    {
        $a = 5;
        $b = 10;

        $actual = addition($a, $b);

        $this->assertEquals(15, $actual);
    }
}

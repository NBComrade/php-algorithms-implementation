<?php

require_once __DIR__ . '/../../src/basic/greatest_common_divisor.php';

class GreatestCommonDivisorTest extends \PHPUnit\Framework\TestCase
{
    public function testGCD(): void
    {
        $result = greatestCommonDivisor(44, 6);
        $this->assertEquals(2, $result);
    }
}

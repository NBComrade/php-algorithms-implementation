<?php

require_once __DIR__ . '/../../src/basic/factorial.php';

class FactorialTest extends \PHPUnit\Framework\TestCase
{
    public function testFactorial(): void
    {
        $result = factorial(4); //factorial for 4
        $this->assertEquals(24, $result);
    }
}

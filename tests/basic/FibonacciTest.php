<?php

require_once __DIR__ . '/../../src/basic/fibonacci.php';

class FibonacciTest extends \PHPUnit\Framework\TestCase
{
    public function testFactorial(): void
    {
        $result = fibonacci(12); //fibonacci 12
        $this->assertEquals(144, $result);
    }
}

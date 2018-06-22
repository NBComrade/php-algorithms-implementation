<?php

require_once __DIR__ . '/../../src/basic/fibonacci_recursive.php';

class FibonacciRecursiveTest extends \PHPUnit\Framework\TestCase
{
    public function testFactorial(): void
    {
        $result = fibonacciRecursive(12); //fibonacci 12
        $this->assertEquals(144, $result);
    }
}

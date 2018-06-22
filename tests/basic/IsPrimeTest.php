<?php

require_once __DIR__ . '/../../src/basic/is_prime.php';

class IsPrimeTest extends \PHPUnit\Framework\TestCase
{
    const PRIME = 5;
    const NOT_PRIME = 4;

    public function testIsPrime(): void
    {
        $result = isPrime(self::PRIME);
        $this->assertTrue($result);
    }

    public function testIsNotPrime()
    {
        $result = isPrime(self::NOT_PRIME);
        $this->assertFalse($result);
    }
}

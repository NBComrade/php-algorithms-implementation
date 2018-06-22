<?php

require_once __DIR__ . '/../../src/search/linear.php';

class LinearTest extends \PHPUnit\Framework\TestCase
{
    private const FIND_VALUE = 20;
    private const VALUE_NOT_FOUND = -1;
    private $sortedArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    public function testBinarySearchFound(): void
    {
        $index = binarySearch($this->sortedArray, self::FIND_VALUE);
        $this->assertEquals(self::FIND_VALUE, $this->sortedArray[$index]);
    }

    public function testBinarySearchNotFound(): void
    {
        $value = binarySearch($this->sortedArray, 999999);
        $this->assertEquals(self::VALUE_NOT_FOUND, $value);
    }
}

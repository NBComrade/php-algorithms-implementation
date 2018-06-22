<?php

require_once __DIR__ . '/../../src/sort/quick.php';

class QuickTest extends \PHPUnit\Framework\TestCase
{
    private const START_POSITION = 0;

    private $unsortedArray = [2,1,8,5,4,10,3,7,6,9];
    private $sortedArray = [1,2,3,4,5,6,7,8,9,10];

    public function testQuickSort(): void
    {
        quickSort($this->unsortedArray, self::START_POSITION, $this->getEndPosition());
        $this->assertEquals($this->sortedArray, $this->unsortedArray);
    }

    private function getEndPosition()
    {
        return (count($this->unsortedArray) - 1);
    }
}

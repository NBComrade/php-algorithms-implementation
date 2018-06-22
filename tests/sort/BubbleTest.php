<?php

require_once __DIR__ . '/../../src/sort/bubble.php';

class BubbleTest extends \PHPUnit\Framework\TestCase
{
    private $unsortedArray = [2,1,8,5,4,10,3,7,6,9];
    private $sortedArray = [1,2,3,4,5,6,7,8,9,10];

    public function testBubble(): void
    {
        bubbleSort($this->unsortedArray); //get link of original array
        $this->assertEquals($this->sortedArray, $this->unsortedArray);
    }
}

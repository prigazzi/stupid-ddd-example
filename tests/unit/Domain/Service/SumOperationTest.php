<?php
namespace Pablo\Tests\Domain\Service;

use Pablo\Domain\Model\Number;
use Pablo\Domain\Service\SumOperation;

class SumOperationTest extends \PHPUnit\Framework\TestCase
{
    public function testSumOperationWorksCorrectly()
    {
        $number1 = $this->prophesize(Number::class);
        $number1->value()->willReturn(2);

        $number2 = $this->prophesize(Number::class);
        $number2->value()->willReturn(3);

        $result = (new SumOperation($number1->reveal(), $number2->reveal()))->calculate();

        $this->assertInstanceOf(Number::class, $result);
        $this->assertSame(5, $result->value());
    }
}

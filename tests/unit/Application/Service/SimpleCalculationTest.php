<?php
namespace Pablo\Tests\Application\Service;

use Pablo\Application\Service\SimpleCalculation;

class SimpleCalculationTest extends \PHPUnit\Framework\TestCase
{
    /** @var SimpleCalculation */
    private $service;

    public function setUp()
    {
        $this->service = new SimpleCalculation();
    }

    public function testThatSumTwoNumbersWork()
    {
        $result = $this->service->sumTwoNumber(1, 2);

        $this->assertInternalType('integer', $result);
        $this->assertSame(3, $result);
    }
}

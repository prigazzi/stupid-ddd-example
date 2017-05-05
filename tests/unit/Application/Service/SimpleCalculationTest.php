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
        $result = $this->service->sumTwoNumbers(1, 2);

        $this->assertInternalType('integer', $result);
        $this->assertSame(3, $result);
    }

    public function testThatSumThreeNumbersWork()
    {
        $result = $this->service->sumThreeNumbers(1, 2, 3);

        $this->assertInternalType('integer', $result);
        $this->assertSame(6, $result);
    }

    /**
     * @dataProvider validMultiplicationDataProvider
     */
    public function testThatMultiplyTwoNumbersWork($number1, $number2, $expected)
    {
        $result = $this->service->multiplyTwoNumbers($number1, $number2);

        $this->assertInternalType('integer', $result);
        $this->assertSame($expected, $result);
    }

    public function validMultiplicationDataProvider()
    {
        return [
            [1, 1, 1],
            [3, 0, 0],
            [3, 5, 15],
            [-3, 2, -6],
            [5, -2, -10]
        ];
    }
}

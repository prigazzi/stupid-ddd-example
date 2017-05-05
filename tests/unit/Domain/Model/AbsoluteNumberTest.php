<?php
namespace Pablo\Tests\Domain\Model;

use Pablo\Domain\Model\AbsoluteNumber;
use Pablo\Domain\Model\Number;

class AbsoluteNumberTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param $expected
     * @param $initial
     * @dataProvider validArgumentsDataProvider
     */
    public function testInitializationWorks($expected, $initial)
    {
        $this->assertSame($expected, (new AbsoluteNumber($initial))->value());
    }

    public function validArgumentsDataProvider()
    {
        return [
            [5, 5],
            [5, -5],
            [0, -0],
            [25, '25'],
            [25, '-25']
        ];
    }

    public function testThatCreatingAbsoluteFromNumberWorks()
    {
        $number = $this->prophesize(Number::class);
        $number->value()->willReturn(-10);

        $absoluteNumber = AbsoluteNumber::fromNumber($number->reveal());

        $this->assertInstanceOf(AbsoluteNumber::class, $absoluteNumber);
        $this->assertSame(10, $absoluteNumber->value());
        $this->assertNotSame($number, $absoluteNumber);
    }
}

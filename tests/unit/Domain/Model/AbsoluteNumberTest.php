<?php
namespace Pablo\Tests\Domain\Model;

use Pablo\Domain\Model\AbsoluteNumber;

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
}

<?php
namespace Pablo\Tests\Domain\Model;

use Pablo\Domain\Model\Number;

class NumberTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param $expected
     * @param $initial
     * @dataProvider validArgumentDataProvider
     */
    public function testInitializationWorksCorrectly($expected, $initial)
    {
        $this->assertSame($expected, (new Number($initial))->value());
    }

    public function validArgumentDataProvider()
    {
        return [
            [0, 0],
            [5, 5.5],
            [5, '5']
        ];
    }

    /**
     * @expectedException \TypeError
     * @dataProvider invalidArgumentDataProvider
     */
    public function testIncorrectInitialization($invalid)
    {
        (new Number($invalid));
    }

    public function invalidArgumentDataProvider()
    {
        return [
            [new \stdClass()],
            [null]
        ];
    }
}

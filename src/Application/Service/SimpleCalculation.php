<?php
namespace Pablo\Application\Service;

use Pablo\Domain\Model\AbsoluteNumber;
use Pablo\Domain\Model\Number;
use Pablo\Domain\Service\SumOperation;

class SimpleCalculation
{
    public function sumTwoNumbers(int $number1, int $number2)
    {
        $number1 = new Number($number1);
        $number2 = new Number($number2);
        $sum = new SumOperation($number1, $number2);

        return $sum->calculate()->value();
    }

    public function sumThreeNumbers(int $number1, int $number2, int $number3)
    {
        $number4 = $this->sumTwoNumbers($number1, $number2);
        return $this->sumTwoNumbers($number3, $number4);
    }

    public function multiplyTwoNumbers(int $number1, int $number2)
    {
        $result = 0;
        $number2 = new Number($number2);

        if ($number2->isNegative()) {
            $number2 = AbsoluteNumber::fromNumber($number2);
            $number1 *= -1;
        }

        $counter = $number2->value();

        while ($counter--) {
            $result = $this->sumTwoNumbers($result, $number1);
        }

        return $result;
    }
}
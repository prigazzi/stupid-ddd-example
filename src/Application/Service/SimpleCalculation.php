<?php
namespace Pablo\Application\Service;

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
}
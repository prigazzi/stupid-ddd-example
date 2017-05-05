<?php
namespace Pablo\Application\Service;

use Pablo\Domain\Model\Number;
use Pablo\Domain\Service\SumOperation;

class SimpleCalculation
{
    public function sumTwoNumber(int $number1, int $number2)
    {
        $number1 = new Number($number1);
        $number2 = new Number($number2);
        $sum = new SumOperation($number1, $number2);

        return $sum->calculate()->value();
    }
}
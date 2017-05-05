<?php
namespace Pablo\Domain\Service;

use Pablo\Domain\Model\Number;

class SumOperation
{
    /**
     * @var Number
     */
    private $number1;

    /**
     * @var Number
     */
    private $number2;

    private $result;

    public function __construct(Number $number1, Number $number2)
    {

        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calculate() : Number
    {
        if ($this->result === null) {
            $result = $this->number1->value() + $this->number2->value();
            $this->result = new Number($result);
        }

        return $this->result;
    }
}

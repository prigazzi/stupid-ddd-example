<?php
declare(strict_types=1);
namespace Pablo\Domain\Model;

class Number
{
    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function isNegative() : bool
    {
        return $this->value !== abs($this->value);
    }
}
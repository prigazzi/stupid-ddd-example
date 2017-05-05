<?php
declare(strict_types=1);
namespace Pablo\Domain\Model;

class AbsoluteNumber extends Number
{
    public function __construct(int $value)
    {
        parent::__construct(abs($value));
    }

    public static function fromNumber(Number $number)
    {
        return new self($number->value());
    }
}

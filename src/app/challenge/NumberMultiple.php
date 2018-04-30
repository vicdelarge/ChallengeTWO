<?php
namespace app\challenge;

class NumberMultiple
{
    public function numberEval(int $number, int $multiple)
    {
        $isMultiple = $number % $multiple;
        return $isMultiple;
    }
}

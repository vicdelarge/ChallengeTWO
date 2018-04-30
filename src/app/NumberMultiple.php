<?php
namespace app;

class NumberMultiple
{
    public function numberEval(int $number, int $multiple)
    {
        $isMultiple = $number % $multiple;
        return $isMultiple;
    }
}

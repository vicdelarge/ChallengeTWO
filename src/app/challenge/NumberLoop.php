<?php
namespace app\challenge;

class NumberLoop
{
    private $formatNumbers;
    
    public function __construct(FormatNumbers $formatNumbers)
    {
        $this->formatNumbers = $formatNumbers;
    }
    
    public function numberLoop()
    {
        $i = 1;
        $result = array();
        while ($i <= 100) {
            $text = $this->formatNumbers->multipleToText($i, 3, 5);
            $result[] = $text;
            $i++;
        }
        return $result;
    }
}

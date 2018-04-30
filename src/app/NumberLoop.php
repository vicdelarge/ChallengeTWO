<?php
namespace app;

class NumberLoop
{
    const LINIANOS = '00';
    const LINIO = '01';
    const IT = '10';
    
    protected $text = array();
    private $multiple;
    
    public function __construct(NumberMultiple $multiple)
    {
        $this->multiple = $multiple;
        $this->text = array(
            self::LINIANOS => 'Linianos',
            self::LINIO => 'Linio',
            self::IT => 'IT',
        );
    }
    
    public function numberLoop()
    {
        $i = 1;
        while ($i <= 100) {
            $text = $this->multipleToText($i, 3, 5);
            echo $text."\n";
            $i++;
        }
    }
    
    public function multipleToText(int $i, $multiple1, $multiple2)
    {
        $three = $this->multiple->numberEval($i, $multiple1);
        $five = $this->multiple->numberEval($i, $multiple2);
        $idx = intval(boolval($three)).intval(boolval($five));
        
        if (isset($this->text[$idx])) {
            return $this->text[$idx];
        }
        
        return $i;
    }
}

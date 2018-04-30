<?php
namespace app\challenge;

class FormatNumbers
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
    
    
    public function multipleToText(int $i, int $multiple1, int $multiple2)
    {
        $eval1 = $this->multiple->numberEval($i, $multiple1);
        $eval2 = $this->multiple->numberEval($i, $multiple2);
        $idx = intval(boolval($eval1)).intval(boolval($eval2));
        
        if (isset($this->text[$idx])) {
            return $this->text[$idx];
        }
        
        return $i;
    }
}

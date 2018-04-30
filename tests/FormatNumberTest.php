<?php
namespace tests;

require('src/app/challenge/NumberMultiple.php');
require('src/app/challenge/FormatNumbers.php');

use app\challenge\NumberMultiple;
use app\challenge\FormatNumbers;
use PHPUnit\Framework\TestCase;

class FormatNumberTest extends TestCase
{
    private $formatNumbers;
    private $numberMultiple;
    
    protected function setUp()
    {
        $this->numberMultiple = new NumberMultiple();
        $this->formatNumbers = new FormatNumbers($this->numberMultiple);
    }
    
    public function testReturnLinioIfThreeMultiple()
    {
        $result = $this->formatNumbers->multipleToText(9, 3, 5);
        $this->assertEquals("Linio", $result);
    }
    
    public function testReturnITIfFiveMultiple()
    {
        $result = $this->formatNumbers->multipleToText(10, 3, 5);
        $this->assertEquals("IT", $result);
    }
    
    public function testReturnLinianosIfThreeAndFiveMultiple()
    {
        $result = $this->formatNumbers->multipleToText(15, 3, 5);
        $this->assertEquals("Linianos", $result);
    }
    
    public function testReturnNumberIfNOTThreeORFiveMultiple()
    {
        $result = $this->formatNumbers->multipleToText(68, 3, 5);
        $this->assertEquals(68, $result);
    }
}

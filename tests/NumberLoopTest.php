<?php
namespace tests;

require('src/app/NumberLoop.php');
require('src/app/NumberMultiple.php');
use \app\NumberLoop;
use \app\NumberMultiple;
use PHPUnit\Framework\TestCase;

class NumberLoopTest extends TestCase
{
    private $numberLoop;
    private $numberMultiple;
    
    protected function setUp()
    {
        $this->numberMultiple = new NumberMultiple();
        $this->numberLoop = new NumberLoop($this->numberMultiple);
    }
    
    public function testReturnLinioIfThreeMultiple()
    {
        $result = $this->numberLoop->multipleToText(9, 3, 5);
        $this->assertEquals("Linio", $result);
    }
    
    public function testReturnITIfFiveMultiple()
    {
        $result = $this->numberLoop->multipleToText(10, 3, 5);
        $this->assertEquals("IT", $result);
    }
    
    public function testReturnLinianosIfThreeAndFiveMultiple()
    {
        $result = $this->numberLoop->multipleToText(15, 3, 5);
        $this->assertEquals("Linianos", $result);
    }
    
    public function testReturnNumberIfNOTThreeORFiveMultiple()
    {
        $result = $this->numberLoop->multipleToText(68, 3, 5);
        $this->assertEquals(68, $result);
    }
    
    public function testLoop()
    {
        $this->numberLoop->numberLoop();
    }
}

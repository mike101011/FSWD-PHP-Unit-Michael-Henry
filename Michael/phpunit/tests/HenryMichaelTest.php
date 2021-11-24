<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use TDD\HenryMichael;

class HenryMichaelTest extends TestCase //Naming is very important Test at the end!
{
    public function testmultiply()
    {
        $obj = new HenryMichael();
        $input1 = 7;
        $input2 = 3;
        $output = $obj->multiply($input1, $input2);
        $this->assertEquals(21, $output, "The output should be 21");
    }
    public function testfiver()
    {
        $obj = new HenryMichael();
        $input1 = 0;
        $input2 = 1;
        $input3 = 2;
        $input4 = 3;
        $input5 = 5;
        $output = $obj->fiver($input1, $input2, $input3, $input4, $input5);
        $this->assertEquals(11, $output, "The sum should be 11");
    }
    public function testavg()
    {
        $obj = new HenryMichael();
        $input = [3, 4, 5];
        $output = $obj->avg($input);
        $this->assertEquals(4, $output, "It should be 4");
    }
}

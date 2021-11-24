<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use TDD\CLHM2;

class CLHM2Test extends TestCase
{
    public function testinfo()
    {
        $obj = new CLHM2("Henry", "Vienna");
        $z = $obj->luckNumber;
        $this->assertEquals("Henry lives in Vienna and his lucky number is 9", $obj->info(), "Error");
    }
    public function testimage()
    {
        $obj = new CLHM2("Henry", "Vienna");
        $input = "https://assets.orf.at/mims/2021/48/36/crops/w=640,h=256,q=70,r=2/1154091_opener_411036_coronavirus_bezirke_hohe_inzidenz_doh.jpg?s=c565d0d1813a38d9972e8d16caa2722c04d741d7";
        $output = "Whoo, try again!";
        $this->assertEquals($output, $obj->image($input), "Something wrong");
    }
}
// if you only want to test a specific file then use vendor\bin\phpunit  tests\CLHM2Test.php, for example
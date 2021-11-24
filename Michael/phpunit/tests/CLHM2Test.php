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
        $this->assertEquals("Henry lives in Vienna and his lucky number is " . $z, $obj->info(), "Error");
    }
}

<?php

namespace TDD;

class CLHM2
{
    public $luckNumber;
    function __construct(public $name, public $city)
    {
        $this->name = $name;
        $this->city = $city;
        $this->luckNumber = rand(1, 11);
    }
    public function info()
    {
        return $this->name . " lives in " . $this->city . " and his lucky number is " . $this->luckNumber;
    }
}

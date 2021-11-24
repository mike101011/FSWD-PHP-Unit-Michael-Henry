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
    public function image($a)
    {
        $s = "https://assets.orf.at/mims/2021/48/55/crops/w=640,h=256,q=70,r=2/1154417_opener_411155_coronavirus_lockdown_geimpfte_o.jpg?s=f4bd26962f4c6f9b9cdc122acb0d2f73a48b3662";
        if ($a == $s) {
            return "Cool, the images are matching!";
        } else {
            return "Whoo, try again!";
        }
    }
}

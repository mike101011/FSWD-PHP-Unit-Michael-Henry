<?php

namespace TDD;

use PHPUnit\Framework\Constraint\Count;

class HenryMichael
{
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function fiver($a, $b, $c, $d, $e)
    {
        return $a + $b + $c + $d + $e;
    }
    public function avg($arr)
    {
        if (count($arr) == 0) {
            return 0;
        } else {
            $counter = 0;
            $card = count($arr);
            for ($i = 0; $i < $card; $i++) {
                $counter += $arr[$i];
            }
            return $counter / $card;
        }
    }
}

<?php

class Recursion
{

    public function factorial($value)
    {
        if($value == 1 || $value == 0) return $value;

        return $value * $this->factorial($value - 1);
    }

}

$fact = new Recursion();
$a = $fact->factorial(5);
$b = $fact->factorial(6);
$c = $fact->factorial(7);
$d = $fact->factorial(8);


echo $a."\n";
echo $b."\n";
echo $c."\n";
echo $d."\n";





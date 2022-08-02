<?php

class Recursion
{
    
    public function __construct(public int $value){
        $this->value = $value;
    }

    public function factorial($value)
    {
        if($value-1 != 0)return;

        return $this->factorial($value) * $this->factorial($value - 1);
    }

}

$a = new Recursion(5);
$a->factorial(10);
var_dump($a);

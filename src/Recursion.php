<?php

class Recursion
{
    public function factorial($value)
    {
        if($value == 1 || $value == 0) return 1;
        
        return $value * $this->factorial($value - 1);
    }

    public function fib($value)
    {
        if($value == 1 || $value == 0) return $value;

        return $this->fib($value-1) + $this->fib($value-2);
    }

    public function printFactorial($val)
    {
        echo $val."\n";
    }


}

//Test Cases
$fact = new Recursion();
$a = $fact->factorial(5);
$b = $fact->fib(5);

$fact -> printFactorial($a);
$fact -> printFactorial($b);


/*
    Expected Output
    120 
    5
*/




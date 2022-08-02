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



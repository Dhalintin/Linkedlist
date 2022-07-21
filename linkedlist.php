<?php

class Node
{
    public $value;
    
    public function __construct($value,  public ?Node $next = null) { }
} 


class LinkedList
{
    public ?Node $head = null;

    public function __construct(?Node $head = null) { }
 
    public function print()
    {
        $node = $this->head;
 
        while ($node) {
            echo $node->value;
        }
        echo "\n";
    }

    public function addValue($value): Node {
        $this->head = $node = new Node($value, $this->head);
     
        return $node;
    }
}

$a = new LinkedList();

$a->addValue('A');
$a->print(); // A

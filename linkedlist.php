<?php

class Node
{
    public $value;
    //public ?Node $next = null;
    public function __construct($value,  ?Node $next = null) { }
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
 
            if ($node = $node->next) {
                echo ' -> ';
            }
        }
        echo "\n";
    }

    public function addValue($value): Node {
        $this->head = $node = new Node($value, $this->head);
     
        return $node;
    }
}

$a = $linkedlist->addValue('A');
$linkedlist->print(); // A
/* 
$b = $linkedlist->addValue('B');
$linkedlist->print(); // B -> A
*/
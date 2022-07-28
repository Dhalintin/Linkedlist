<?php

class Node
{
    public $value;
    public $next;

    public function __construct($value, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }
}

class LinkedList{
    //Initilalizing the  Node value to a nullable node type
    public ?Node $head = null;
    public ?Node $tail = null;
    public ?Node $next = null;

    //Function to add value to the linkedlist
    public function addValue($value): Node
    {
        if (!$this->head) {
            $this->head = $node = new Node($value, $this->head);
            $this->tail ??= $node; // Store node as tail if tail is empty.

            return $node;
        }

        return $this->insertAfter($value, $this->tail);
        
    }

    //Function to Print out value 
    public function print()
    {
        $node = $this->head;

        while($node){
            echo $node->value;
            if($node = $node->next){
                echo "->";
            }
        }
    }
    
    public function insertAfter($value, Node $position): Node
    {
        $position->next = $node = new Node($value, $position->next);
    
        // Update tail if we append a new node after it.
        if ($position === $this->tail) {
            $this->tail = $node;
        }
    
        return $node;
    }
 
}


//Test Case
$list = new LinkedList();
 
$a = $list->addValue('A');
$b = $list->addValue('B');
$c = $list->addValue('C');
$d = $list->addValue('D');
$e = $list->addValue('E');
$f = $list->addValue('F');
$g = $list->addValue('G');
$h = $list->addValue('H');
$i = $list->insertAfter('I', $g);


$list->print(); 
/*Expected Output

    H->G->F->E->D->C->B->A

*/

//var_dump($list);
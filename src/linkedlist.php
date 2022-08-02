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
    
    public function __construct(public $head = null){}

    //Function to add value to the begining of the linkedlist
    public function insertAtEnd($value):Node
    {
        if (!$this->head) {
            $this->head = $node = new Node($value);
            $this->tail ??= $node; // Store node as tail if tail is empty.
         
            return $node;
        }

        return $this->insert($value, $this->tail);

    }

    //Function to add value to the begining of the linkedlist
    public function insertAtBegining($value):Node
    {
        $this->head = $node = new Node($value, $this->head);
 
        return $node;
    }

    public function insert($value, $position): Node
    {
        $position->next = $node = new Node($value, $position->next);
    
        // Update tail if we append a new node after it.
        if ($position === $this->tail) {
            $this->tail = $node;
        }
    
        return $node;
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

    
    //Printing recurssively 
    public function printR($head)
    {
        $node = $this->head;

        if(!$node === $this->tail) {
            echo "Null";
            $node = $node->next;
            return; 
        }
        
        echo "{$node->value}->";

        return $this->printR($node->next);
    }

    
}


//Test Case
$list = new LinkedList();

$a = $list->insertAtEnd('A');
$b = $list->insertAtEnd('B');
$c = $list->insertAtEnd('C');
$d = $list->insertAtEnd('D');
$e = $list->insertAtEnd('E');
$f = $list->insertAtEnd('F');
$g = $list->insertAtEnd('G');
$h = $list->insertAtEnd('H');
//$i = $list->insertAfter('I', 6);


$list->print($a);
//var_dump($list);
/*Expected Output

    A->B->C->D->E->F->G->H

    Insert at the begiinig, end and at a node

*/

//var_dump($list);
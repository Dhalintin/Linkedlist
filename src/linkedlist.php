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


//Test Case 1
$list1 = new LinkedList();

$a = $list1->insertAtBegining('A');
$b = $list1->insertAtBegining('B');
$c = $list1->insertAtBegining('C');
$d = $list1->insertAtBegining('D');
$e = $list1->insertAtBegining('E');
$f = $list1->insertAtBegining('F');
$g = $list1->insertAtBegining('G');
$h = $list1->insertAtBegining('H');

//Test Case 2
$list2 = new LinkedList();

$i = $list2->insertAtEnd('A');
$j = $list2->insertAtEnd('B');
$k = $list2->insertAtEnd('C');
$l = $list2->insertAtEnd('D');
$m = $list2->insertAtEnd('E');
$n = $list2->insertAtEnd('F');
$o = $list2->insertAtEnd('G');
$p = $list2->insertAtEnd('H');


$list1->print();
echo "\n";
$list2->print();

/*Expected Output

    H->G->F->E->D->C->B->A
    A->B->C->D->E->F->G->H


*/

//var_dump($list);
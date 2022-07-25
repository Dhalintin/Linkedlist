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

    //Function to add value to the linkedlist
    public function addValue($value): Node
    {
        $this->head = $node = new Node($value, $this->head);
     
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


$list->print(); 

/*Expected Output

    H->G->F->E->D->C->B->A

*/


<?php

class Node
{
    public $value;
    public $next;
    public $arr;

    public function __construct($value, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }

}


class LinkedList{
    
    public function __construct(public $head = null){}

    /* 
        Insert Functions
    */

      //Function to add value to the begining of the linkedlist
      public function insertAtBegining($value):Node
      {
    
          $this->head = $node = new Node($value, $this->head);
   
          return $node;
      }


    //Function to add value to the end of the linkedlist
    public function insertAtEnd($value)
    {
        //$this->insertAtEndR($this->head, $value);
        if($this->head)
        {
            $curr = $this->head;
            $prev = null;

            while($curr)
            {
                $prev = $curr;
                $curr = $curr->next;
            }

            $node = new Node($value);
            $prev->next = $node;
        }
        else
        {
            $this->head = $node = new Node($value, $this->head);
            return $node;
        }
        
    }

    public function insertAtEndR($curr, $value)
    {
        $curr = $this->head;

        if($curr == null){
            return new Node($value);
        }

        $curr->next = $this->insertAtEndR($curr->next, $value);
        return $curr;
    }

    public function insert($value, $position)
    {
        $curr = $this->head;
        $prev = null;

        while($curr != null)
        {
            if($position == 0){
                $node = new Node($value, $curr);
                if($prev){
                    $prev->next = $node;
                }else{
                    $this->head = $node;
                }
            }
        }
    
        return $node;
    }
    
    /*
        Print Functions
    */
    //Function to Print out value 
    public function print()
    {
        return $this->printR($this->head);

    }

    //Printing recurssively 
    public function printR($node)
    {
       
        
        if($node === null) {
            echo "Null";
            return; 
        }

        echo "{$node->value}->";

      

        return $this->printR($node->next);
        
    }

    /*

    public function makeArray($node)
    {
        $arr = array();

        if($node === null) {
            return; 
        }

        $arr[$i] = $node->value;

        return $this->makeArray(node->next);
    }

    */

    /*
        End of print function
    */

    
}

//Test Case 2

$list2 = new LinkedList();

$h = $list2->insertAtBegining('Alpha');
$i = $list2->insertAtEnd('A');
$j = $list2->insertAtEnd('B');
$k = $list2->insertAtEnd('C');
$l = $list2->insertAtEnd('D');
$m = $list2->insertAtEnd('E');
$n = $list2->insertAtEnd('F');
$o = $list2->insertAtEnd('G');
//$p = $list2->insert('H', 0);


$list2 -> print();

var_dump($list2);

/*Expected Output

    H->G->F->E->D->C->B->A
    A->B->C->D->E->F->G->H


*/

//var_dump($list);
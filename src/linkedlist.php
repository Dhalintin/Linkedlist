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
      public function insertAtBegining($value):Node
      {
    
          $this->head = $node = new Node($value, $this->head);
   
          return $node;
      }


    //Function to add value to the end of the linkedlist
    public function insertAtEnd($value)
    {
        $curr = $this->head;
        
        return $this->insertAtEndR($curr, $value);
    }

    private function insertAtEndR($curr, $value)
    {
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

            $prev = $curr;
            $curr = $curr->next;
            $position--;
        }
    
        return $node;
    }

    public function insertR($value, $index)
    {
        $curr = $this->head;

        return $this->insrt($curr, $value, $index);
    }

    private function insrt($curr, $value, $index)
    {
        if($index == 0){
            return new Node($value, $curr);
        }

        $curr->next = $this->insrt($curr->next, $value, $index - 1);
        return $curr;
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
}

//Test Case 2

$list2 = new LinkedList();

$h = $list2->insertAtBegining('Alpha');
$i = $list2->insertAtEnd('A');
$j = $list2->insertAtEnd('B');
$k = $list2->insertAtEnd('C');
$l = $list2->insertAtEnd('H');
$m = $list2->insert('D', 4);
$n = $list2->insert('E', 5);
$o = $list2->insertR('F', 6);
$p = $list2->insertR('G', 7);


$list2 -> print();

/*Expected Output

    Alpha->A->B->C->D->E->F->G->H

*/

//var_dump($list);
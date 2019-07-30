<?php
class Node{
    private $next,$data;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
    public function set_next($node){
        $this->next = $node;
    }

    public function Next(){
        return $this->next;
    }

    public function Data(){
        return $this->data;
    }
}

class LinkedList{
    private $head,$size;
    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function is_empty(){
        return $this->head == null;
    }

    public function append($data){
        $node = new Node($data);
        if($this->is_empty()){
            $this->head = $node;
            $this->size += 1;
        }else{
            $curr = $this->head;
            while($curr->Next() != null){
                $curr = $curr->Next();
            }

            $curr->set_next($node);
            $this->size += 1;
        }
    }

    public function display(){
        $curr = $this->head;
        while ($curr != null){
            print_r($curr->Data()."\n");
            $curr = $curr->Next();
        }
    }

    public function Size(){
        return $this->size;
    }
}

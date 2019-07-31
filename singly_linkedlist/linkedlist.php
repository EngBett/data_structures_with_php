<?php

/**
 * Class Node
 */
class Node{
    private $next,$data;

    /**
     * Node constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    /**
     * Set node
     * @param $node
     */
    public function set_next($node){
        $this->next = $node;
    }

    /**
     * @return next
     */
    public function Next(){
        return $this->next;
    }

    /**
     * @return data
     */
    public function Data(){
        return $this->data;
    }
}

class LinkedList{
    private $head,$size;

    /**
     * LinkedList constructor.
     */
    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    /**
     * @return bool
     */
    public function is_empty(){
        return $this->head == null;
    }

    /**
     * Add to the end of the list
     * @param $data
     */
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

    /**
     * Add to the beginnig of the list
     * @param $data
     */
    public function prepend($data){
        $node = new Node($data);
        if($this->is_empty()){
            $this->head = $node;
            $this->size+=1;
        }else{
            $node->set_next($this->head);
            $this->head = $node;
            $this->size+=1;
        }
    }

    /**
     * Delete node given data
     * @param $data
     * @return null
     */
    public function delete_node($data){
        if($this->is_empty()){
            return null;
        }

        if($this->head->Data()==$data){
            $curr = $this->head;
            $this->head = $curr->Next();
            $curr = null;
            $this->size-=1;
        }else{
            $prev = null;
            $curr = $this->head;
            while($curr->Next()!=null && $curr->Data()!=$data){
                $prev = $curr;
                $curr = $curr->Next();
            }

            if($curr->Data()==$data){
                $prev->set_next($curr->Next());
                $curr = null;
                $this->size-=1;
            }
        }

    }


    /**
     * Delete and return the last node in the list
     * @return deleted value
     */
    public function pop(){
        if($this->is_empty()){
            return null;
        }

        $curr = $this->head;

        if($this->size==1){
            $this->head = null;
            $this->size-=1;

            return $curr->Data();

        }else{
            $prev = null;
            while($curr->Next()!=null){
                $prev = $curr;
                $curr = $curr->Next();
            }

            $result = $curr->Data();
            $prev->set_next(null);
            $this->size-=1;

            return $result;
        }

    }

    public function remove($index){
        if($this->is_empty()){
            return null;
        }

        if($this->size>$index){
            if($index==0){
                $curr = $this->head;
                $this->head = $curr->Next();
                $curr = null;
                $this->size-=1;
            }else{
                $prev = null;
                $curr = $this->head;

                $i = 0;
                while($index != $i){
                    $prev = $curr;
                    $curr = $curr->Next();
                    $i+=1;
                }

                if($index==$i){
                    $prev->set_next($curr->Next());
                    $curr = null;
                    $this->size-=1;
                }

            }
        }

    }

    /**
     * Display all values of the list
     */
    public function display(){
        $curr = $this->head;
        while ($curr != null){
            print_r($curr->Data()."\n");
            $curr = $curr->Next();
        }
    }

    /**
     * @return int size of the list
     */
    public function Size(){
        return $this->size;
    }
}
